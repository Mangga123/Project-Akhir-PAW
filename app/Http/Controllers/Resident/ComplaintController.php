<?php

namespace App\Http\Controllers\Resident;

use App\Http\Controllers\Controller;
use App\Models\Complaint;
use App\Models\Resident;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ComplaintController extends Controller
{
    // Tampilkan form lapor
    public function index()
    {
        // Cari data penghuni dari user yang login
        $resident = Resident::where('user_id', Auth::id())->first();
        
        // Ambil history laporan dia
        $complaints = Complaint::where('resident_id', $resident->id ?? 0)->latest()->get();

        return view('resident.complaints.index', compact('complaints'));
    }

    // Simpan laporan
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:100',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048', // Max 2MB
        ]);

        $resident = Resident::where('user_id', Auth::id())->firstOrFail();

        $data = [
            'resident_id' => $resident->id,
            'title' => $request->title,
            'description' => $request->description,
            'status' => 'Pending',
        ];

         if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('complaints'), $filename);
            $data['image'] = $filename;
        }

        Complaint::create($data);

        return redirect()->back()->with('success', 'Laporan berhasil dikirim! Admin akan segera cek.');
    }
}