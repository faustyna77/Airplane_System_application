<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passenger extends Model
{
    use HasFactory;

   protected $primaryKey="passenger_id";
    protected $fillable=["name","surname","pesel_number","phone","email"];
    public $timestamps=false;



    public function adres()
    {
        return $this->belongsTo(Adres::class,'ID_adres');
    }
}
