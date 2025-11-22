<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bill;
use App\Models\Resident;
use App\Models\Payment;
use Illuminate\Http\Request;

class BillController extends Controller
{
    // Daftar Tagihan
    public function index()
    {
        $bills = Bill::with(['resident.user', 'resident.unit', 'payment'])->latest()->paginate(10);
        return view('admin.bills.index', compact('bills'));
    }

    public function create()
    {
        $residents = Resident::with('user', 'unit')->where('status', 'Aktif')->get();
        return view('admin.bills.create', compact('residents'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'resident_id' => 'required|exists:residents,id',
            'month' => 'required',
            'year' => 'required',
            'amount' => 'required|numeric|min:0',
            'due_date' => 'required|date',
        ]);

        $monthString = $request->month . ' ' . $request->year;

        Bill::create([
            'resident_id' => $request->resident_id,
            'month' => $monthString,
            'amount' => $request->amount,
            'due_date' => $request->due_date,
            'status' => 'Belum Dibayar',
        ]);

        return redirect()->route('admin.bills.index')->with('success', 'Tagihan berhasil dibuat!');
    }

    // ==========================================
    //  INI BAGIAN YANG DIPERBAIKI (FIX ERROR DELETE)
    // ==========================================
    public function destroy(Bill $bill)
    {
        // Cek apakah tagihan ini punya pembayaran terkait?
        if ($bill->payment) {
            // Hapus dulu pembayarannya
            $bill->payment->delete();
        }

        // Baru hapus tagihannya
        $bill->delete();
        
        return redirect()->route('admin.bills.index')->with('success', 'Tagihan (dan riwayat pembayarannya) berhasil dihapus.');
    }

    public function confirmPayment(Request $request, Bill $bill)
    {
        $request->validate([
            'action' => 'required|in:accept,reject',
            'admin_note' => 'nullable|string',
        ]);

        $payment = $bill->payment;

        if (!$payment) {
            return back()->with('error', 'Data pembayaran tidak ditemukan.');
        }

        if ($request->action == 'accept') {
            $bill->update(['status' => 'Lunas']);
            $payment->update(['status' => 'Dikonfirmasi']);
            $message = 'Pembayaran berhasil dikonfirmasi. Status tagihan LUNAS.';
        } else {
            $bill->update(['status' => 'Belum Dibayar']); 
            $payment->update([
                'status' => 'Ditolak',
                'admin_note' => $request->admin_note
            ]);
            $message = 'Pembayaran ditolak. Penghuni diminta upload ulang.';
        }

        return back()->with('success', $message);
    }
}