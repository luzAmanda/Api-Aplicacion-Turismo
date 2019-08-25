<?php

use Illuminate\Database\Seeder;

class TablaSucursalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sucursales')->insert([
            'id_negocio' => 1,
            'nombre'=>'nombre del negocio 1',
            'celular'=> '0987654322',
            'telefono'=>'teléfono 1',
            'direccion'=>'dirección 1',
            'longitud'=>-78.117445,
            'latitud'=> 0.343915,
            'estado'=>1,
        ]);
        DB::table('sucursales')->insert([
            'id_negocio' => 2,
            'nombre'=>'nombre del negocio 2',
            'celular'=> '098787654',
            'telefono'=>'2345656565',
            'direccion'=>'dirección 2',
            'longitud'=>-78.113647,
            'latitud'=>0.345053,
            'estado'=>1,
        ]);
        DB::table('sucursales')->insert([
            'id_negocio' => 3,
            'nombre'=>'nombre del negocio 3',
            'celular'=> '0987656567',
            'telefono'=>'0987878765',
            'direccion'=>'dirección 3',
            'longitud'=>-78.121843,
            'latitud'=>0.337006,
            'estado'=>1,
        ]);
        DB::table('sucursales')->insert([
            'id_negocio' => 4,
            'nombre'=>'nombre del negocio 4',
            'celular'=> '0987878765',
            'telefono'=>'0987878765',
            'direccion'=>'dirección 4',
            'longitud'=>-78.117488,
            'latitud'=>0.333358 ,
            'estado'=>1,
        ]);
        DB::table('sucursales')->insert([
            'id_negocio' => 5,
            'nombre'=>'nombre del negocio 5',
            'celular'=> '0987878765',
            'telefono'=>'0987878765',
            'direccion'=>'dirección 5',
            'longitud'=>-78.125636,
            'latitud'=> 0.347026,
            'estado'=>1,
        ]);
        DB::table('sucursales')->insert([
            'id_negocio' => 6,
            'nombre'=>'nombre del negocio 6',
            'celular'=> '0987878765',
            'telefono'=>'0987878765',
            'direccion'=>'dirección 6',
            'longitud'=>-78.12134,
            'latitud'=>0.341556 ,
            'estado'=>1,
        ]);
        DB::table('sucursales')->insert([
            'id_negocio' => 7,
            'nombre'=>'0987878765',
            'celular'=> '0987878765',
         
            'direccion'=>'dirección 7',
            'longitud'=>-78.13085,
            'latitud'=>0.349129,
            'estado'=>1,
        ]);
    }
}
