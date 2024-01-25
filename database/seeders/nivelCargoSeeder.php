<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class nivelCargoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nivel_cargos')->insert([
            'id'    => 1,
            'nombre'=> 'Nación'
        ]);
        
        DB::table('nivel_cargos')->insert([
            'id'    => 2,
            'nombre'=> 'Provincia'
        ]);
        
        DB::table('nivel_cargos')->insert([
            'id'    => 3,
            'nombre'=> 'Municipio'
        ]);
    }
}
