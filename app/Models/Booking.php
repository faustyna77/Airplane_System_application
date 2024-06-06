<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $primaryKey='booking_id';
    protected $fillable=['passenger_id','adres_id','flight_id','reservation_status_id','baggage','place'];
    public $timestamps=false;

    public function passengers()
    {
        return $this->belongsTo(Passenger::class,'passenger_id');
    }
    public function adres()
    {
        return $this->belongsTo(Adres::class,'adres_id');
    }

    public function flights()
    {
        return $this->belongsTo(Flight::class,'flight_id');
    }
    public function status_reservation()
    {
        return $this->belongsTo(StatusReservation::class,'status_reservation_id');
    }
}
