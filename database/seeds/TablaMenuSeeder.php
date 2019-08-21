<?php

use Illuminate\Database\Seeder;

class TablaMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        DB::table('combos')->insert([
            'nombre' => 'combo 1',
            'descripcion' => 'Descripción combo 1',
            'precio'=>'8',
            'estado'=>1
           
        ]);

        DB::table('combos')->insert([
            'nombre' => 'combo 2',
            'descripcion' => 'Descripción combo 2',
            'precio'=>'8.99',
            'estado'=>1
           
        ]);

        DB::table('combos')->insert([
            'nombre' => 'combo 3',
            'descripcion' => 'Descripción combo 3',
            'precio'=>'9.99',
            'estado'=>1
           
        ]);


        DB::table('menus')->insert([
            'id_sucursal' => 1,
            'id_plato'=>1,
            'id_bebida'=>1,
            'id_postre' =>1,
            'id_combo' =>1
        ]);

        DB::table('menus')->insert([
            'id_sucursal' => 2,
            'id_plato'=>2,
            
            'id_postre' =>2,
            'id_combo' =>1
        ]);

        DB::table('menus')->insert([
            'id_sucursal' => 3,
            'id_plato'=>2,
            'id_bebida'=>2,
            'id_postre' =>2,
            'id_combo' =>1
        ]);
        DB::table('menus')->insert([
            'id_sucursal' => 4,
            'id_plato'=>3,
            'id_bebida'=>3,
            'id_postre' =>1,
            'id_combo' =>1
        ]);
        DB::table('menus')->insert([
            'id_sucursal' => 5,
            'id_plato'=>3,
            'id_bebida'=>2,
           
            'id_combo' =>2
        ]);
        DB::table('menus')->insert([
            'id_sucursal' => 6,
            'id_plato'=>1,
            'id_bebida'=>3,
            'id_postre' =>3,
            'id_combo' =>1
        ]);
        DB::table('menus')->insert([
            'id_sucursal' => 7,
            'id_plato'=>1,
            
            'id_postre' =>2,
            'id_combo' =>3
        ]);
        DB::table('menus')->insert([
            'id_sucursal' => 7,
            'id_plato'=>3,
            
            'id_postre' =>3,
            'id_combo' =>3
        ]);
    }
}
