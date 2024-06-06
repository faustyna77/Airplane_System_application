<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Passenger;

class PassengersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //


        Passenger::create(


            [

     
                
                
                "name"=>"name",
                "surname"=>"surname",
                "pesel_number"=>"pesel_number",
                "phone"=>"phone",
                "email"=>"email",
            


            ]
            );
    
}
}