<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;

    protected $primaryKey='flight_id';
    protected $fillable=['departure_date','airplane_id'];

    public $timestamps=false;
    public function airplanes()
    {
        return $this->belongsTo(Airplane::class,'airplane_id');
    }
}
