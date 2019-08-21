<?php

use Illuminate\Database\Seeder;

class TablaTipoNegocioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    //  $tipo_negocio=[
     //     'Restaurante',
       //   'Hotel',
         // 'Farmacia',
         // 'Librería'
     // ];
     // foreach($tipo_negocio as $key=>$value){
       //   DB::table('tipo_negocio')->insert([
           //   'nombre'=>$value,
         //     'descripcion' =>'descripción'
         // ]);

     // }
     
     DB::table('tipo_negocio')->insert([
        'nombre' => 'Restaurante',
        'descripcion' => 'Descripción del restautante',
    ]);
    }
}
