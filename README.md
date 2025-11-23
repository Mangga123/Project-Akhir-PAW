<?php

namespace App\Http\Controllers\Resident;

use App\Http\Controllers\Controller;
use App\Models\Bill;
use App\Models\Payment;
use App\Models\Resident;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    /**
     * Tampilkan daftar tagihan milik penghuni yang login.
     */
    public function index()
    {
        // Ambil data resident dari user yang login
        $resident = Resident::where('user_id', Auth::id())->first();

        // Ambil tagihan, urutkan dari yang terbaru
        // Kita juga ambil relasi 'payment' untuk mengecek status/catatan admin
        $bills = $resident 
            ? Bill::with('payment')->where('resident_id', $resident->id)->latest()->get()
            : collect();

        return view('resident.bills.index', compact('bills'));
    }

    /**
     * Tampilkan form upload bukti bayar.
     */
    public function create(Bill $bill)
    {
        $resident = Resident::where('user_id', Auth::id())->firstOrFail();
        
        // Keamanan: Pastikan tagihan ini benar milik user yang login
        if ($bill->resident_id != $resident->id) {
            abort(403, 'Akses Ditolak.');
        }

        // Jika statusnya Menunggu Konfirmasi atau Lunas, tidak boleh upload ulang 
        // KECUALI jika status pembayarannya 'Ditolak'
        if ($bill->status == 'Menunggu Konfirmasi' || $bill->status == 'Lunas') {
            // Cek apakah ditolak
            if (!$bill->payment || $bill->payment->status != 'Ditolak') {
                 return redirect()->route('resident.bills.index')->with('error', 'Tagihan sedang diproses atau sudah lunas.');
            }
        }

        return view('resident.payments.create', compact('bill'));
    }

    /**
     * Simpan bukti bayar.
     */
    public function store(Request $request, Bill $bill)
    {
        $request->validate([
            'payment_date' => 'required|date',
            'proof_image' => 'required|image|mimes:jpg,jpeg,png|max:2048', // Max 2MB
        ]);

        // Cek apakah sudah ada pembayaran sebelumnya (misal ditolak)
        $payment = Payment::where('bill_id', $bill->id)->first();

        // Upload File Gambar
        if ($request->hasFile('proof_image')) {
            $file = $request->file('proof_image');
            // Nama file: 1700755200_bukti_budi.jpg
            $filename = time() . '_' . $file->getClientOriginalName();
            // Simpan ke public/payments
            $file->move(public_path('payments'), $filename); 
        } else {
            $filename = null;
        }

        if ($payment) {
            // Update data lama (Re-upload karena ditolak sebelumnya)
            $payment->update([
                'payment_date' => $request->payment_date,
                'amount' => $bill->amount,
                'proof_image' => $filename ?? $payment->proof_image,
                'status' => 'Pending',
                'admin_note' => null, // Reset catatan admin agar bersih kembali
            ]);
        } else {
            // Buat pembayaran baru
            Payment::create([
                'bill_id' => $bill->id,
                'user_id' => Auth::id(),
                'payment_date' => $request->payment_date,
                'amount' => $bill->amount,
                'proof_image' => $filename,
                'status' => 'Pending',
            ]);
        }

        // Update Status Tagihan jadi "Menunggu Konfirmasi"
        $bill->update(['status' => 'Menunggu Konfirmasi']);

        return redirect()->route('resident.bills.index')
            ->with('success', 'Bukti pembayaran berhasil dikirim! Tunggu konfirmasi admin.');
    }
}
