<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PartnersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('partners')->insert([
            [
                'name' => 'Mario',
                'surname' => 'Rossi',
                'age' => 30,
                'description' => 'Una breve descrizione di Mario'
            ],
            [
                'name' => 'Luigi',
                'surname' => 'Verdi',
                'age' => 35,
                'description' => 'Una breve descrizione di Luigi'
            ],
            [
                'name' => 'Gino',
                'surname' => 'Strada',
                'age' => 75,
                'description' => 'Una breve descrizione di Gino'
            ],[
                'name' => 'Sossio',
                'surname' => 'Aruta',
                'age' => 55,
                'description' => 'Una breve descrizione di Sossio'
            ]
        ]);
    }
}
