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
            'nombre'=> 'Padre/Madre de',
            'reciproco' => 2
        ]);
        
        DB::table('tipo_vinculos')->insert([
            'id'    => 2,
            'nombre'=> 'Hijo/a de',
            'reciproco' => 1
        ]);
        
        DB::table('tipo_vinculos')->insert([
            'id'    => 3,
            'nombre'=> 'Hermano/a de',
            'reciproco' => 3
        ]);
        
        DB::table('tipo_vinculos')->insert([
            'id'    => 4,
            'nombre'=> 'Amigo/a de',
            'reciproco' => 4
        ]);
        
        DB::table('tipo_vinculos')->insert([
            'id'    => 5,
            'nombre'=> 'Cuñado/a de',
            'reciproco' => 5
        ]);
        
        DB::table('tipo_vinculos')->insert([
            'id'    => 6,
            'nombre'=> 'Primo/a de',
            'reciproco' => 6
        ]);
        
        DB::table('tipo_vinculos')->insert([
            'id'    => 7,
            'nombre'=> 'Suegro/a de',
            'reciproco' => 8
        ]);
        
        DB::table('tipo_vinculos')->insert([
            'id'    => 8,
            'nombre'=> 'Yerno/Nuera de',
            'reciproco' => 7
        ]);
        
        DB::table('tipo_vinculos')->insert([
            'id'    => 9,
            'nombre'=> 'Jefe/a de',
            'reciproco' => 10
        ]);
        
        DB::table('tipo_vinculos')->insert([
            'id'    => 10,
            'nombre'=> 'Empleado/a de',
            'reciproco' => 9
        ]);
        
    }
}
