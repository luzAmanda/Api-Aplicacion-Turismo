<?php

use Illuminate\Database\Seeder;

class TablaSucursalCategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sucursal_categoria')->insert([
            'id_sucursal'=>1,
          'id_categoria'=>1,
        ]);
        DB::table('sucursal_categoria')->insert([
            'id_sucursal'=>1,
          'id_categoria'=>2,
        ]);
        DB::table('sucursal_categoria')->insert([
            'id_sucursal'=>1,
          'id_categoria'=>3,
        ]);
        DB::table('sucursal_categoria')->insert([
            'id_sucursal'=>1,
          'id_categoria'=>4,
        ]);

        DB::table('sucursal_categoria')->insert([
            'id_sucursal'=>2,
          'id_categoria'=>1,
        ]);
        DB::table('sucursal_categoria')->insert([
            'id_sucursal'=>2,
          'id_categoria'=>2,
        ]);
        DB::table('sucursal_categoria')->insert([
            'id_sucursal'=>2,
          'id_categoria'=>3,
        ]);
        DB::table('sucursal_categoria')->insert([
            'id_sucursal'=>2,
          'id_categoria'=>4,
        ]);
///////////
        DB::table('sucursal_categoria')->insert([
            'id_sucursal'=>3,
        'id_categoria'=>1,
        ]);
        DB::table('sucursal_categoria')->insert([
            'id_sucursal'=>3,
        'id_categoria'=>7,
        ]);
        DB::table('sucursal_categoria')->insert([
            'id_sucursal'=>3,
        'id_categoria'=>3,
        ]);
        DB::table('sucursal_categoria')->insert([
            'id_sucursal'=>3,
        'id_categoria'=>4,
        ]);
        DB::table('sucursal_categoria')->insert([
            'id_sucursal'=>4,
          'id_categoria'=>1,
        ]);
        DB::table('sucursal_categoria')->insert([
            'id_sucursal'=>4,
          'id_categoria'=>2,
        ]);
        DB::table('sucursal_categoria')->insert([
            'id_sucursal'=>4,
          'id_categoria'=>3,
        ]);
        DB::table('sucursal_categoria')->insert([
            'id_sucursal'=>4,
          'id_categoria'=>4,
        ]);



        DB::table('sucursal_categoria')->insert([
            'id_sucursal'=>5,
          'id_categoria'=>7,
        ]);
        DB::table('sucursal_categoria')->insert([
            'id_sucursal'=>5,
          'id_categoria'=>8,
        ]);
        DB::table('sucursal_categoria')->insert([
            'id_sucursal'=>5,
          'id_categoria'=>9,
        ]);
        DB::table('sucursal_categoria')->insert([
            'id_sucursal'=>5,
          'id_categoria'=>10,
        ]);
        DB::table('sucursal_categoria')->insert([
            'id_sucursal'=>5,
          'id_categoria'=>11,
        ]);


        
        DB::table('sucursal_categoria')->insert([
            'id_sucursal'=>6,
          'id_categoria'=>7,
        ]);
        DB::table('sucursal_categoria')->insert([
            'id_sucursal'=>6,
          'id_categoria'=>8,
        ]);
        DB::table('sucursal_categoria')->insert([
            'id_sucursal'=>6,
          'id_categoria'=>9,
        ]);
        DB::table('sucursal_categoria')->insert([
            'id_sucursal'=>6,
          'id_categoria'=>10,
        ]);
        DB::table('sucursal_categoria')->insert([
            'id_sucursal'=>6,
          'id_categoria'=>11,
        ]);



        
        DB::table('sucursal_categoria')->insert([
            'id_sucursal'=>7,
          'id_categoria'=>7,
        ]);
        DB::table('sucursal_categoria')->insert([
            'id_sucursal'=>7,
          'id_categoria'=>8,
        ]);
        DB::table('sucursal_categoria')->insert([
            'id_sucursal'=>7,
          'id_categoria'=>9,
        ]);
        DB::table('sucursal_categoria')->insert([
            'id_sucursal'=>7,
          'id_categoria'=>10,
        ]);
        DB::table('sucursal_categoria')->insert([
            'id_sucursal'=>7,
          'id_categoria'=>11,
        ]);
    }
}
