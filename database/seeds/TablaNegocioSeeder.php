<?php

use Illuminate\Database\Seeder;

class TablaNegocioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('negocios')->insert([
            'id_tipo_negocio' => 1,
            'nombre'=>'nombre del negico 1',
            'descripcion'=> 'descripcion del negocio 1'
        ]);
        DB::table('negocios')->insert([
            'id_tipo_negocio' => 1,
            'nombre'=>'nombre del negico 2',
            'descripcion'=> 'descripción del negocio 2'
        ]);
        DB::table('negocios')->insert([
            'id_tipo_negocio' => 1,
            'nombre'=>'nombre del negico 3',
            'descripcion'=> 'descripción del negocio 3'
        ]);
        DB::table('negocios')->insert([
            'id_tipo_negocio' => 1,
            'nombre'=>'nombre del negico 4',
            'descripcion'=> 'descripción del negocio 4'
        ]);
        DB::table('negocios')->insert([
            'id_tipo_negocio' => 1,
            'nombre'=>'nombre del negico 5',
            'descripcion'=> 'descripción del negocio 5'
        ]);
        DB::table('negocios')->insert([
            'id_tipo_negocio' => 1,
            'nombre'=>'nombre del negico 6',
            'descripcion'=> 'descripción del negocio 6'
        ]);
        DB::table('negocios')->insert([
            'id_tipo_negocio' => 1,
            'nombre'=>'nombre del negico 7',
            'descripcion'=> 'descripción del negocio 7'
        ]);
    }
}
