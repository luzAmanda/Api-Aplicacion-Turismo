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
        DB::table('tipo_negocio')->insert([
            'nombre' => 'Farmacia',
            'icono' => 'thermometer', 
        ]);
        DB::table('tipo_negocio')->insert([
            'nombre' => 'Peluquería',
            'icono' => 'calculator', 
        ]);

        DB::table('tipo_negocio')->insert([
            'nombre' => 'Veterinaria',
            'icono' => 'paw', 
        ]);
        DB::table('tipo_negocio')->insert([
            'nombre' => 'Bisutería',
            'icono' => 'calculator', 
        ]);
        DB::table('tipo_negocio')->insert([
            'nombre' => 'Pastelería',
            'icono' => 'calculator', 
        ]);

        DB::table('tipo_negocio')->insert([
            'nombre' => 'Heladería',
            'icono' => 'calculator', 
        ]);

        DB::table('tipo_negocio')->insert([
            'nombre' => 'Dulcería',
            'icono' => 'calculator', 
        ]);
        DB::table('tipo_negocio')->insert([
            'nombre' => 'Cosméticos',
            'icono' => 'basket', 
        ]);
        DB::table('tipo_negocio')->insert([
            'nombre' => 'Electrónica',
            'icono' => 'calculator', 
        ]);
        DB::table('tipo_negocio')->insert([
            'nombre' => 'Tintorería',
            'icono' => 'calculator', 
        ]);
        DB::table('tipo_negocio')->insert([
            'nombre' => 'Ropa',
            'icono' => 'shirt', 
        ]);
        DB::table('tipo_negocio')->insert([
            'nombre' => 'Lavadero de autos',
            'icono' => 'calculator', 
        ]);


    }
}
