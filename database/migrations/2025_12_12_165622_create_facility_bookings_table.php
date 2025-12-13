<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('facility_bookings', function (Blueprint $table) {
            $table->id();
            // Menghubungkan ke tabel users (siapa yang booking)
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            
            // Jenis fasilitas: 'tennis' atau 'pool'
            $table->string('facility_type'); 
            
            // Tanggal booking
            $table->date('date');
            
            // Jam mulai (kita simpan angkanya saja, misal 8, 9, 10)
            $table->integer('start_hour'); 
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facility_bookings');
    }
};