<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adres extends Model
{
    use HasFactory;

    

    protected $primaryKey = 'adres_id';


    protected $fillable = [ 'wojewodztwo', 'powiat', 'miejscowosc', 'ulica','numer_domu','numer_lokalu'];

    
    public $timestamps = false;


    public function passengers()
    {
        return $this->hasMany(Passenger::class,'adres_id');
    }
}
