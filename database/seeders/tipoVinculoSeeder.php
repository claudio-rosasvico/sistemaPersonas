<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class tipoVinculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tipo_vinculos')->insert([
            'id'    => 1,
            'nombre'=> 'Padre/Madre'
        ]);
        
        DB::table('tipo_vinculos')->insert([
            'id'    => 2,
            'nombre'=> 'Hijo/a'
        ]);
        
        DB::table('tipo_vinculos')->insert([
            'id'    => 3,
            'nombre'=> 'Hermano/a'
        ]);
        
        DB::table('tipo_vinculos')->insert([
            'id'    => 4,
            'nombre'=> 'Amigo/a'
        ]);
        
        DB::table('tipo_vinculos')->insert([
            'id'    => 5,
            'nombre'=> 'Cuñado/a'
        ]);
        
        DB::table('tipo_vinculos')->insert([
            'id'    => 6,
            'nombre'=> 'Primo/a'
        ]);
        
        DB::table('tipo_vinculos')->insert([
            'id'    => 7,
            'nombre'=> 'Suegro/a'
        ]);
        
        DB::table('tipo_vinculos')->insert([
            'id'    => 8,
            'nombre'=> 'Primo/a'
        ]);
        
        DB::table('tipo_vinculos')->insert([
            'id'    => 9,
            'nombre'=> 'Jefe/a'
        ]);
        
        DB::table('tipo_vinculos')->insert([
            'id'    => 10,
            'nombre'=> 'Empleado/a'
        ]);
    }
}
