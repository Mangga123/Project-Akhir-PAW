<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\UnitController;
use App\Http\Controllers\Admin\ResidentController;
use App\Http\Controllers\Admin\ComplaintController as AdminComplaintController;
use App\Http\Controllers\Admin\BillController;
use App\Http\Controllers\Resident\ComplaintController as ResidentComplaintController;
use App\Http\Controllers\Resident\PaymentController;
use App\Models\Unit;
use App\Models\Resident;
use App\Models\Complaint;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//  ROUTE BARU: Halaman Home / Testimoni
Route::get('/home', function () {
    return view('home');
})->name('home');

// Route untuk Halaman About Us
Route::get('/about', function () {
    return view('about');
})->name('about');

// Route untuk Halaman Contact Us
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Route untuk Halaman Facilities (Kolam Renang & Tenis)
Route::get('/facilities', function () {
    return view('facilities');
})->name('facilities');

// ==================== DASHBOARD UMUM ====================
Route::get('/dashboard', function () {
    if (auth()->check()) {
        if (auth()->user()->isAdmin()) {
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->route('resident.home');
        }
    }
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// ==================== PROFILE ====================
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// ==================== ADMIN ROUTES ====================
Route::middleware(['auth', 'verified', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    
    Route::get('/dashboard', function () {
        return view('admin.dashboard', [
            'totalUnits' => Unit::count(),
            'occupiedUnits' => Unit::where('status', 'Terisi')->count(),
            'totalResidents' => Resident::where('status', 'Aktif')->count(),
            'pendingComplaints' => Complaint::where('status', 'Pending')->count(),
        ]);
    })->name('dashboard');

    Route::resource('units', UnitController::class);
    Route::resource('residents', ResidentController::class);
    
    // Komplain
    Route::get('/complaints', [AdminComplaintController::class, 'index'])->name('complaints.index');
    Route::put('/complaints/{complaint}', [AdminComplaintController::class, 'update'])->name('complaints.update');

    // Tagihan (Bill)
    Route::resource('bills', BillController::class);
    
    // Konfirmasi Pembayaran
    Route::post('/bills/{bill}/confirm', [BillController::class, 'confirmPayment'])->name('bills.confirm');
    
    // Facility Management
    Route::get('/facilities', [App\Http\Controllers\Admin\FacilityController::class, 'index'])->name('facilities.index');
    Route::post('/facilities', [App\Http\Controllers\Admin\FacilityController::class, 'storeMaintenance'])->name('facilities.maintenance');
    Route::delete('/facilities/{id}', [App\Http\Controllers\Admin\FacilityController::class, 'destroy'])->name('facilities.destroy');

});

// ==================== RESIDENT ROUTES ====================
Route::middleware(['auth', 'verified'])->prefix('resident')->name('resident.')->group(function () {

    //ROUTE : Halaman Home Warga
    Route::get('/home', function () {
        return view('resident.home');
    })->name('home');
    
    Route::get('/my-unit', function () {
        return view('resident.my_unit');
    })->name('my-unit');    

    // Komplain
    Route::get('/complaints', [ResidentComplaintController::class, 'index'])->name('complaints.index');
    Route::post('/complaints', [ResidentComplaintController::class, 'store'])->name('complaints.store');

    // Tagihan
    Route::get('/bills', [PaymentController::class, 'index'])->name('bills.index');
    Route::get('/payments/create/{bill}', [PaymentController::class, 'create'])->name('payments.create');
    Route::post('/payments/{bill}', [PaymentController::class, 'store'])->name('payments.store');

    // Facility Booking
    Route::get('/facility-booking', [App\Http\Controllers\Resident\FacilityController::class, 'index'])->name('facility.booking');
    Route::post('/facility-booking', [App\Http\Controllers\Resident\FacilityController::class, 'store'])->name('facility.store');
    Route::delete('/facility-booking/{id}', [App\Http\Controllers\Resident\FacilityController::class, 'destroy'])->name('facility.destroy');

});

require __DIR__.'/auth.php';