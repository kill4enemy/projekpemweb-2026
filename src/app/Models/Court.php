<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Court extends Model
{
    protected $fillable = [
    'name',
    'location',
    'price_per_hour',
    'is_active',
];
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
