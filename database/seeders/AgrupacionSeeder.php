<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AgrupacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('agrupaciones')->insert([
            'id'    => 1,
            'nombre'=> 'Unión por la Patria',
            'nombre_foto' => 'union_por_la_patria.png'
        ]);
        
        DB::table('agrupaciones')->insert([
            'id'    => 2,
            'nombre'=> 'UCR',
            'nombre_foto' => 'ucr.png'
        ]);
        
        DB::table('agrupaciones')->insert([
            'id'    => 3,
            'nombre'=> 'Juntos por el Cambio',
            'nombre_foto' => 'jxc.png'
        ]);

        DB::table('agrupaciones')->insert([
            'id'    => 4,
            'nombre'=> 'Libertad Avanza',
            'nombre_foto' => 'libertad_avanza.png'
        ]);
        
        DB::table('agrupaciones')->insert([
            'id'    => 5,
            'nombre'=> 'PJ',
            'nombre_foto' => 'PJ.png'
        ]);
        
    }
}
