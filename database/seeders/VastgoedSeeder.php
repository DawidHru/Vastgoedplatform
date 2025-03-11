<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VastgoedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vastgoederen =
        [
            [
                'titel' => 'Huis',
                'omschrijving' => 'Dit is huis 1',
                'type' => 'eenpersoonskamer',   
                'prijs' => '$2',
                'locatie' => 'hoofddorp'    
            ],
            [
                'titel' => 'Huis 2',
                'omschrijving' => 'Dit is huis 2',
                'type' => 'gezinswoning',      
                'prijs' => '$2',
                'locatie' => 'hoofddorp' 
            ],
            [
                'titel' => 'Huis 3',
                'omschrijving' => 'Dit is huis 3',
                'type' => 'villa',
                'prijs' => '$2',
                'locatie' => 'hoofddorp'
            ],
        ];
        DB::table('vastgoederen')->insert($vastgoederen);
    }
}
