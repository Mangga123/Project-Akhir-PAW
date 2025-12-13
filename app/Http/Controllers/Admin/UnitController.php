<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    
    //Tampilkan daftar semua unit.
     
    public function index()
    {
        // Ambil data unit, urutkan terbaru, dan paginasi 10 per halaman
        $units = Unit::latest()->paginate(10);
        return view('admin.units.index', compact('units'));
    }

    
    // Tampilkan form untuk membuat unit baru.
     
    public function create()
    {
        return view('admin.units.create');
    }

    
    // Simpan data unit baru ke database.
     
    public function store(Request $request)
    {
        $request->validate([
            'unit_number' => 'required|unique:units,unit_number',
            'tower' => 'required',
            'floor' => 'required|numeric',
            'type' => 'required',
            'status' => 'required',
        ]);

        Unit::create($request->all());

        return redirect()->route('admin.units.index')
            ->with('success', 'Unit apartemen berhasil ditambahkan!');
    }

    
    // Tampilkan form edit unit.
     
    public function edit(Unit $unit)
    {
        return view('admin.units.edit', compact('unit'));
    }

    
    // Update data unit yang diedit.
     
    public function update(Request $request, Unit $unit)
    {
        $request->validate([
            'unit_number' => 'required|unique:units,unit_number,' . $unit->id,
            'tower' => 'required',
            'floor' => 'required|numeric',
            'type' => 'required',
            'status' => 'required',
        ]);

        $unit->update($request->all());

        return redirect()->route('admin.units.index')
            ->with('success', 'Data unit berhasil diperbarui!');
    }

    
    // Hapus unit.
    
    public function destroy(Unit $unit)
    {
        $unit->delete();

        return redirect()->route('admin.units.index')
            ->with('success', 'Unit berhasil dihapus!');
    }
}