<?php

use Illuminate\Database\Seeder;

class TablaPromocionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('promociones')->insert([
            'id_sucursal' => 1,
            'nombre'=>'nombre de la promoción 1',
            'descripcion'=>Str::random(100),
            'estado'=>1
            
        ]);

        DB::table('promociones')->insert([
            'id_sucursal' => 3,
            'nombre'=>'nombre de la promoción 3',
            'descripcion'=>Str::random(100),
            'estado'=>1
            
        ]);
        DB::table('promociones')->insert([
            'id_sucursal' => 4,
            'nombre'=>'nombre de la promoción 4',
            'descripcion'=>Str::random(100),
            'estado'=>1
            
        ]);
    }
}
