<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Resident;
use App\Models\Unit;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ResidentController extends Controller
{
    public function index()
    {
        $residents = Resident::with(['user', 'unit'])->paginate(10);
        return view('admin.residents.index', compact('residents'));
    }

    public function create()
    {
        // Ambil unit yang statusnya 'Kosong' saja
        $units = Unit::where('status', 'Kosong')->get();
        return view('admin.residents.create', compact('units'));
    }

    public function store(Request $request)
    {
        // 1. Validasi Data Dasar (Unit & Tanggal)
        $request->validate([
            'unit_id' => 'required|exists:units,id',
            'start_date' => 'required|date',
            'user_type' => 'required|in:new,existing', // Cek pilihan (Baru / Ada)
        ]);

        $user = null;

        // 2. LOGIKA PERCABANGAN (PENTING!)
        if ($request->user_type == 'new') {
            // === JIKA BUAT AKUN BARU ===
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|min:8',
                'phone' => 'nullable|string',
            ]);

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'phone' => $request->phone ?? '-',
                'role_id' => 2, // Role Warga
            ]);

        } else {
            // === JIKA PILIH AKUN YANG SUDAH ADA ===
            $request->validate([
                'existing_user_id' => 'required|exists:users,id',
            ]);

            // Ambil data user dari database berdasarkan ID yang dipilih di dropdown
            $user = User::findOrFail($request->existing_user_id);
        }

        // 3. Simpan Data Penghuni (Resident)
        Resident::create([
            'user_id' => $user->id,
            'unit_id' => $request->unit_id,
            'start_date' => $request->start_date,
            'status' => 'Aktif',
        ]);

        // 4. Update Status Unit Menjadi 'Terisi'
        $unit = Unit::find($request->unit_id);
        $unit->update(['status' => 'Terisi']);

        return redirect()->route('admin.residents.index')->with('success', 'Data penghuni berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $resident = Resident::with('user')->findOrFail($id);
        $units = Unit::all(); // Tampilkan semua unit untuk pilihan pindah kamar
        return view('admin.residents.edit', compact('resident', 'units'));
    }

    public function update(Request $request, $id)
    {
        $resident = Resident::findOrFail($id);

        $request->validate([
            'unit_id' => 'required|exists:units,id',
            'start_date' => 'required|date',
            'status' => 'required',
        ]);

        // Cek jika pindah unit (Unit lama dikosongkan, Unit baru diisi)
        if ($resident->unit_id != $request->unit_id) {
            // Kosongkan unit lama
            $oldUnit = Unit::find($resident->unit_id);
            $oldUnit->update(['status' => 'Kosong']);

            // Isi unit baru
            $newUnit = Unit::find($request->unit_id);
            $newUnit->update(['status' => 'Terisi']);
        }

        // Jika status diubah jadi Nonaktif, kosongkan unitnya
        if ($request->status == 'Nonaktif') {
            $currentUnit = Unit::find($request->unit_id);
            $currentUnit->update(['status' => 'Kosong']);
        }

        $resident->update([
            'unit_id' => $request->unit_id,
            'start_date' => $request->start_date,
            'status' => $request->status,
        ]);

        return redirect()->route('admin.residents.index')->with('success', 'Data penghuni berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $resident = Resident::findOrFail($id);
        
        // Ubah status unit kembali jadi Kosong
        $unit = Unit::find($resident->unit_id);
        if ($unit) {
            $unit->update(['status' => 'Kosong']);
        }

        // Hapus data resident saja (User login tetap ada, jaga-jaga kalau dia balik lagi)
        $resident->delete();

        return redirect()->route('admin.residents.index')->with('success', 'Data penghuni berhasil dihapus.');
    }
}