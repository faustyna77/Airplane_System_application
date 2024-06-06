<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Adres;
class AdresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        Adres::create([
            'wojewodztwo' => 'podkarpackie',
            'powiat' => 'mielecki',
            'miejscowosc' => 'Mielec',
            'ulica' => 'Korzynska',
            'numer_domu' => '23',
            'numer_lokalu' => '0',
        ]);
    }
}
