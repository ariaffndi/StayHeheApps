<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'bookings';

    protected $fillable = [
        'booking_id',
        'member_id',
        'unit_id',
        'status',
        'start_date',
        'end_date',
    ];

    protected $attributes = [
        'status' => 'on going',
    ];


    public function member()
    {
        return $this->belongsTo(Member::class);
    }

    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }
}
