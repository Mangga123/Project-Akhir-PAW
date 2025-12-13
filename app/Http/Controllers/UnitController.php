<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unit; 
class UnitController extends Controller
{
    // Fungsi untuk menampilkan halaman index (Daftar Unit)
    public function index()
    {
        // 1. Ambil semua data dari tabel units
        $units = Unit::all();
        
        // 2. Kirim data tersebut ke tampilan (view) di folder units/index
        return view('units.index', compact('units'));
    }
}