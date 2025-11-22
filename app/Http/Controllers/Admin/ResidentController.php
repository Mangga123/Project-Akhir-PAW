<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Resident;
use App\Models\User;
use App\Models\Role; // Import Role
use App\Models\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash; // Import Hash untuk password

class ResidentController extends Controller
{
    public function index()
    {
        $residents = Resident::with(['user', 'unit'])->latest()->paginate(10);
        return view('admin.residents.index', compact('residents'));
    }

    public function create()
    {
        // Kita tidak butuh list user lagi, karena akan buat baru
        // Ambil unit yang kosong saja
        $units = Unit::where('status', 'Kosong')->get();

        return view('admin.residents.create', compact('units'));
    }

    public function store(Request $request)
    {
        // Validasi Data Akun + Data Huni
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users', // Cek email unik
            'password' => 'required|string|min:8',
            'phone' => 'required|string|max:20',
            'unit_id' => 'required|exists:units,id',
            'start_date' => 'required|date',
            'status' => 'required',
        ]);

        // 1. Ambil Role ID untuk 'Resident'
        $role = Role::where('role_name', 'Resident')->first();
        $roleId = $role ? $role->id : 2; // Fallback ke ID 2 jika tidak ketemu

        // 2. Buat Akun User Baru
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'role_id' => $roleId,
        ]);

        // 3. Update Status Unit jadi Terisi
        $unit = Unit::find($request->unit_id);
        $unit->update(['status' => 'Terisi']);

        // 4. Buat Data Resident (Hubungkan dengan User yang baru dibuat)
        Resident::create([
            'user_id' => $user->id, // Ambil ID dari user baru
            'unit_id' => $request->unit_id,
            'start_date' => $request->start_date,
            'status' => $request->status,
        ]);

        return redirect()->route('admin.residents.index')
            ->with('success', 'Akun Warga & Data Penghuni berhasil dibuat!');
    }

    public function edit(Resident $resident)
    {
        // Untuk edit, kita ambil semua unit (termasuk yg dia huni skrg)
        $units = Unit::all();
        return view('admin.residents.edit', compact('resident', 'units'));
    }

    public function update(Request $request, Resident $resident)
    {
        $request->validate([
            'unit_id' => 'required|exists:units,id',
            'start_date' => 'required|date',
            'status' => 'required',
        ]);

        // Logic Pindah Unit
        if ($resident->unit_id != $request->unit_id) {
            // Unit lama jadi kosong
            Unit::find($resident->unit_id)->update(['status' => 'Kosong']);
            // Unit baru jadi terisi
            Unit::find($request->unit_id)->update(['status' => 'Terisi']);
        }

        // Update data resident
        $resident->update([
            'unit_id' => $request->unit_id,
            'start_date' => $request->start_date,
            'status' => $request->status,
        ]);

        return redirect()->route('admin.residents.index')
            ->with('success', 'Data penghuni berhasil diperbarui!');
    }

    public function destroy(Resident $resident)
    {
        // Kembalikan status unit jadi Kosong
        $resident->unit->update(['status' => 'Kosong']);
        
        // Hapus data resident
        $resident->delete();
        
        // Opsional: Apakah User-nya (Akun Login) mau dihapus juga?
        // Biasanya Usernya dibiarkan ada tapi non-aktif, atau dihapus.
        // Di sini kita biarkan Usernya tetap ada (history).

        return redirect()->route('admin.residents.index')
            ->with('success', 'Data penghuni berhasil dihapus!');
    }
}