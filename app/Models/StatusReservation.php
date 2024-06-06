<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusReservation extends Model
{
    use HasFactory;

    protected $primaryKey='status_reservation_id';
    protected $fillable=['reservation_state'];
    public $timestamps=false;
    public function bookings()
    {
        return $this->hasMany(Booking::class, 'booking_id');
    }
}
