<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * DAFTAR KOLOM YANG BOLEH DIISI (WHITELIST)
     * Ini yang menyebabkan error tadi jika belum didaftarkan.
     */
    protected $fillable = [
        'role_id',  // ✅ Wajib ada agar bisa set role
        'name',
        'email',
        'password',
        'phone',    // ✅ Wajib ada agar bisa simpan No HP
    ];

    /**
     * The attributes that should be hidden for serialization.
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    // ================= RELASI & HELPER =================

    /**
     * Relasi: User punya satu Role
     */
    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    /**
     * Helper: Cek apakah user adalah Admin
     * Dipakai di middleware & redirect dashboard
     */
    public function isAdmin()
    {
        return $this->role && $this->role->role_name === 'Admin';
    }

    /**
     * Relasi: User (Warga) punya satu data Resident
     */
    public function resident()
    {
        return $this->hasOne(Resident::class);
    }
}