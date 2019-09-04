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
        DB::table('tipo_negocio')->insert([
            'nombre' => 'Restaurante',
            'icono' => 'restaurant', 
        ]);
        DB::table('tipo_negocio')->insert([
            'nombre' => 'cafetería',
            'icono' => 'cafe', 
        ]);
        DB::table('tipo_negocio')->insert([
            'nombre' => 'Bar',
            'icono' => 'beer', 
        ]);
        DB::table('tipo_negocio')->insert([
            'nombre' => 'Hotel',
            'icono' => 'calculator', 
        ]);
    }
}
