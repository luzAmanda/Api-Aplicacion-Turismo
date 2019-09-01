<?php

use Illuminate\Database\Seeder;

class TablaSucursalDetalleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sucursal_detalle')->insert([
            'id_sucursal'=>1,
          'id_detalle'=>1,
        ]);
        DB::table('sucursal_detalle')->insert([
            'id_sucursal'=>1,
          'id_detalle'=>2,
        ]);
        DB::table('sucursal_detalle')->insert([
            'id_sucursal'=>1,
          'id_detalle'=>3,
        ]);
        DB::table('sucursal_detalle')->insert([
            'id_sucursal'=>1,
          'id_detalle'=>4,
        ]);

        DB::table('sucursal_detalle')->insert([
            'id_sucursal'=>2,
          'id_detalle'=>1,
        ]);
        DB::table('sucursal_detalle')->insert([
            'id_sucursal'=>2,
          'id_detalle'=>2,
        ]);
        DB::table('sucursal_detalle')->insert([
            'id_sucursal'=>2,
          'id_detalle'=>3,
        ]);
        DB::table('sucursal_detalle')->insert([
            'id_sucursal'=>2,
          'id_detalle'=>4,
        ]);
///////////
        DB::table('sucursal_detalle')->insert([
            'id_sucursal'=>3,
        'id_detalle'=>1,
        ]);
        DB::table('sucursal_detalle')->insert([
            'id_sucursal'=>3,
        'id_detalle'=>7,
        ]);
        DB::table('sucursal_detalle')->insert([
            'id_sucursal'=>3,
        'id_detalle'=>3,
        ]);
        DB::table('sucursal_detalle')->insert([
            'id_sucursal'=>3,
        'id_detalle'=>4,
        ]);
        DB::table('sucursal_detalle')->insert([
            'id_sucursal'=>4,
          'id_detalle'=>1,
        ]);
        DB::table('sucursal_detalle')->insert([
            'id_sucursal'=>4,
          'id_detalle'=>2,
        ]);
        DB::table('sucursal_detalle')->insert([
            'id_sucursal'=>4,
          'id_detalle'=>3,
        ]);
        DB::table('sucursal_detalle')->insert([
            'id_sucursal'=>4,
          'id_detalle'=>4,
        ]);



        DB::table('sucursal_detalle')->insert([
            'id_sucursal'=>5,
          'id_detalle'=>7,
        ]);
        DB::table('sucursal_detalle')->insert([
            'id_sucursal'=>5,
          'id_detalle'=>8,
        ]);
        DB::table('sucursal_detalle')->insert([
            'id_sucursal'=>5,
          'id_detalle'=>9,
        ]);
        DB::table('sucursal_detalle')->insert([
            'id_sucursal'=>5,
          'id_detalle'=>10,
        ]);
        DB::table('sucursal_detalle')->insert([
            'id_sucursal'=>5,
          'id_detalle'=>11,
        ]);


        
        DB::table('sucursal_detalle')->insert([
            'id_sucursal'=>6,
          'id_detalle'=>7,
        ]);
        DB::table('sucursal_detalle')->insert([
            'id_sucursal'=>6,
          'id_detalle'=>8,
        ]);
        DB::table('sucursal_detalle')->insert([
            'id_sucursal'=>6,
          'id_detalle'=>9,
        ]);
        DB::table('sucursal_detalle')->insert([
            'id_sucursal'=>6,
          'id_detalle'=>10,
        ]);
        DB::table('sucursal_detalle')->insert([
            'id_sucursal'=>6,
          'id_detalle'=>11,
        ]);



        
        DB::table('sucursal_detalle')->insert([
            'id_sucursal'=>7,
          'id_detalle'=>7,
        ]);
        DB::table('sucursal_detalle')->insert([
            'id_sucursal'=>7,
          'id_detalle'=>8,
        ]);
        DB::table('sucursal_detalle')->insert([
            'id_sucursal'=>7,
          'id_detalle'=>9,
        ]);
        DB::table('sucursal_detalle')->insert([
            'id_sucursal'=>7,
          'id_detalle'=>10,
        ]);
        DB::table('sucursal_detalle')->insert([
            'id_sucursal'=>7,
          'id_detalle'=>11,
        ]);
    }
}
