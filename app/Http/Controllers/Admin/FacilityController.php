<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FacilityBooking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FacilityController extends Controller
{
    public function index(Request $request)
    {
        $date = $request->input('date', date('Y-m-d'));
        $type = $request->input('type', 'tennis');

        // Ambil booking beserta data User-nya
        $bookings = FacilityBooking::with('user')
                    ->where('date', $date)
                    ->where('facility_type', $type)
                    ->get()
                    ->keyBy('start_hour');

        return view('admin.facilities.index', compact('bookings', 'date', 'type'));
    }

    // Fitur Maintenance (Admin membooking slot atas nama admin)
    public function storeMaintenance(Request $request)
    {
        $request->validate([
            'facility_type' => 'required',
            'date' => 'required|date',
            'start_hour' => 'required|integer',
        ]);

        // Cek jika sudah ada booking
        $exists = FacilityBooking::where('facility_type', $request->facility_type)
                    ->where('date', $request->date)
                    ->where('start_hour', $request->start_hour)
                    ->exists();

        if ($exists) {
            return back()->with('error', 'Slot sudah terisi, hapus dulu jika ingin maintenance.');
        }

        FacilityBooking::create([
            'user_id' => Auth::id(), // Admin ID
            'facility_type' => $request->facility_type,
            'date' => $request->date,
            'start_hour' => $request->start_hour,
        ]);

        return back()->with('success', 'Jadwal berhasil diset Maintenance.');
    }

    // Hapus Booking (Bisa punya User atau Maintenance sendiri)
    public function destroy($id)
    {
        $booking = FacilityBooking::findOrFail($id);
        $booking->delete();

        return back()->with('success', 'Jadwal berhasil dihapus/dibuka kembali.');
    }
}