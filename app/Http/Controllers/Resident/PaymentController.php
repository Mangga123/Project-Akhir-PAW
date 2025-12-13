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
    
    // Halaman Daftar Tagihan Saya
   
    public function index()
    {
        // Ambil data resident dari user yang login
        $resident = Resident::where('user_id', Auth::id())->first();

        // Jika user ini terdaftar sebagai resident, ambil tagihannya
        $bills = $resident 
            ? Bill::where('resident_id', $resident->id)->latest()->get()
            : collect(); // Jika bukan resident, kembalikan array kosong

        return view('resident.bills.index', compact('bills'));
    }

     
    // Halaman Form Bayar (Upload Bukti)
    
    public function create(Bill $bill)
    {
        // Validasi: Pastikan yang mau bayar adalah pemilik tagihan
        $resident = Resident::where('user_id', Auth::id())->first();
        
        if ($bill->resident_id != $resident->id) {
            abort(403, 'Anda tidak berhak membayar tagihan ini.');
        }

        return view('resident.payments.create', compact('bill'));
    }

    
    // Proses Simpan Bukti Bayar
    
    public function store(Request $request, Bill $bill)
    {
        $request->validate([
            'payment_date' => 'required|date',
            'proof_image' => 'required|image|mimes:jpg,jpeg,png|max:2048', // Maksimal 2MB
        ]);

        // 1. Upload Gambar
        if ($request->hasFile('proof_image')) {
            $file = $request->file('proof_image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('payments'), $filename); // Simpan di folder public/payments
        }

        // 2. Simpan Data Pembayaran
        Payment::create([
            'bill_id' => $bill->id,
            'user_id' => Auth::id(),
            'payment_date' => $request->payment_date,
            'amount' => $bill->amount, // Asumsi bayar lunas
            'proof_image' => $filename,
            'status' => 'Pending', // Status awal pembayaran
        ]);

        // 3. Update Status Tagihan jadi "Menunggu Konfirmasi"
        $bill->update(['status' => 'Menunggu Konfirmasi']);

        return redirect()->route('resident.bills.index')
            ->with('success', 'Bukti pembayaran berhasil dikirim! Menunggu konfirmasi Admin.');
    }
}