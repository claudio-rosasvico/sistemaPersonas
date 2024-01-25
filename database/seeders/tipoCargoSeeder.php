<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class tipoCargoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tipo_cargos')->insert([
            'id'    => 1,
            'nombre'=> 'Presidente/a'
        ]);
        
        DB::table('tipo_cargos')->insert([
            'id'    => 2,
            'nombre'=> 'Vice Presidente/a'
        ]);
        
        DB::table('tipo_cargos')->insert([
            'id'    => 3,
            'nombre'=> 'Ministro/a'
        ]);
        
        DB::table('tipo_cargos')->insert([
            'id'    => 4,
            'nombre'=> 'Vice Ministro/a'
        ]);

        DB::table('tipo_cargos')->insert([
            'id'    => 5,
            'nombre'=> 'Secretario/a'
        ]);
        
        DB::table('tipo_cargos')->insert([
            'id'    => 6,
            'nombre'=> 'Sub Secretario/a'
        ]);
        
        DB::table('tipo_cargos')->insert([
            'id'    => 7,
            'nombre'=> 'Director/a General'
        ]);
        
        DB::table('tipo_cargos')->insert([
            'id'    => 8,
            'nombre'=> 'Director/a'
        ]);
        
        DB::table('tipo_cargos')->insert([
            'id'    => 9,
            'nombre'=> 'Sub Director/a'
        ]);
        
        DB::table('tipo_cargos')->insert([
            'id'    => 10,
            'nombre'=> 'Coordinador/a'
        ]);

        DB::table('tipo_cargos')->insert([
            'id'    => 11,
            'nombre'=> 'Gobernador/a'
        ]);
        
        DB::table('tipo_cargos')->insert([
            'id'    => 12,
            'nombre'=> 'Vice Gobernador/a'
        ]);
        
        DB::table('tipo_cargos')->insert([
            'id'    => 13,
            'nombre'=> 'Intendente/a'
        ]);
        
        DB::table('tipo_cargos')->insert([
            'id'    => 14,
            'nombre'=> 'Vice Intendente/a'
        ]);
        
        DB::table('tipo_cargos')->insert([
            'id'    => 15,
            'nombre'=> 'Diputado/a'
        ]);
        
        DB::table('tipo_cargos')->insert([
            'id'    => 16,
            'nombre'=> 'Senador/a'
        ]);
        
        DB::table('tipo_cargos')->insert([
            'id'    => 17,
            'nombre'=> 'Concejal'
        ]);
        
        DB::table('tipo_cargos')->insert([
            'id'    => 18,
            'nombre'=> 'Empleado/a'
        ]);
    }
}
