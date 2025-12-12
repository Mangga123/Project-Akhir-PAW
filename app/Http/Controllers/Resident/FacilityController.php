<?php

namespace App\Http\Controllers\Resident;

use App\Http\Controllers\Controller;
use App\Models\FacilityBooking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FacilityController extends Controller
{
    public function index(Request $request)
    {
        // Default: Hari ini & Lapangan Tenis
        $date = $request->input('date', date('Y-m-d'));
        $type = $request->input('type', 'tennis'); // 'tennis' or 'pool'

        // Ambil semua booking di tanggal & fasilitas tersebut
        $bookings = FacilityBooking::where('date', $date)
                    ->where('facility_type', $type)
                    ->get()
                    ->keyBy('start_hour'); // Supaya mudah dicek berdasarkan jam

        return view('resident.facilities.booking', compact('bookings', 'date', 'type'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'facility_type' => 'required',
            'date' => 'required|date',
            'start_hour' => 'required|integer',
        ]);

        // Cek apakah sudah ada yang booking duluan (Race Condition Prevention)
        $exists = FacilityBooking::where('facility_type', $request->facility_type)
                    ->where('date', $request->date)
                    ->where('start_hour', $request->start_hour)
                    ->exists();

        if ($exists) {
            return back()->with('error', 'Maaf, jam tersebut baru saja diambil orang lain!');
        }

        // Simpan Booking
        FacilityBooking::create([
            'user_id' => Auth::id(),
            'facility_type' => $request->facility_type,
            'date' => $request->date,
            'start_hour' => $request->start_hour,
        ]);

        return back()->with('success', 'Booking berhasil!');
    }
    
    // Fitur Batal Booking (Opsional tapi berguna)
    public function destroy($id)
    {
        $booking = FacilityBooking::where('id', $id)->where('user_id', Auth::id())->firstOrFail();
        $booking->delete();
        return back()->with('success', 'Booking dibatalkan.');
    }
}