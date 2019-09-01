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
            'id_tiponegocio' => 1,
            'nombre'=>'Restaurate 1',
            'descripcion'=> 'descripcion del Restaurante 1'
        ]);
        DB::table('negocios')->insert([
            'id_tiponegocio' => 1,
            'nombre'=>'Restaurante 2',
            'descripcion'=> 'Restaurante 2'
        ]);
        DB::table('negocios')->insert([
            'id_tiponegocio' => 2,
            'nombre'=>'Cafetería 1',
            'descripcion'=> 'descripción de la Cafetería'
        ]);
        DB::table('negocios')->insert([
            'id_tiponegocio' => 2,
            'nombre'=>'cafetería 2',
            'descripcion'=> 'descripción de la Cafetería'
        ]);
        DB::table('negocios')->insert([
            'id_tiponegocio' => 2,
            'nombre'=>'cafetería 3',
            'descripcion'=> 'descripción de la cafetería'
        ]);
        DB::table('negocios')->insert([
            'id_tiponegocio' => 3,
            'nombre'=>'Bar 1',
            'descripcion'=> 'descripción del Bar'
        ]);
        DB::table('negocios')->insert([
            'id_tiponegocio' => 3,
            'nombre'=>'Bar 2',
            'descripcion'=> 'descripción del Bar '
        ]);
    }
}
