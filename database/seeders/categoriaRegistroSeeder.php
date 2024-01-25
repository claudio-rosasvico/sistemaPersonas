<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class categoriaRegistroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categoria_registros')->insert([
            'id'    => 1,
            'nombre'=> 'Personal'
        ]);
        
        DB::table('categoria_registros')->insert([
            'id'    => 2,
            'nombre'=> 'Político'
        ]);
        
        DB::table('categoria_registros')->insert([
            'id'    => 3,
            'nombre'=> 'Gestión'
        ]);

        DB::table('categoria_registros')->insert([
            'id'    => 4,
            'nombre'=> 'Judicial'
        ]);
    
    }
}
