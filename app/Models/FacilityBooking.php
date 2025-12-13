<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacilityBooking extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'facility_type', 'date', 'start_hour'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}