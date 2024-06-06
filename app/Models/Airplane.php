<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Airplane extends Model
{
    use HasFactory;


    protected $primaryKey="airplane_id";
    protected $fillable=["producer","type"];
    public $timestamps=false;
    public function flights()
    {
        return $this->hasMany(Flight::class,'flight_id');
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class, 'booking_id');
    }
}
