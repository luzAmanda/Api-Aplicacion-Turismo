<?php

use Illuminate\Database\Seeder;

class TablaCategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //restaurante
        DB::table('categorias')->insert([
            'nombre' => 'Platos',
            'icono' => 'ios-restaurant', 
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'Postres',
            'icono' => 'ios-cream', 
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'Desyunos',
            'icono' => 'ios-beer', 
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'Bebidas',
            'icono' => 'ios-calculator', 
        ]);

        // CAFETERIA
        DB::table('categorias')->insert([
            'nombre' => 'Cafés',
            'icono' => 'ios-cafe', 
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'Sanduches',
            'icono' => 'ios-cafe', 
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'Frappés',
            'icono' => 'ios-beer', 
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'Smoothies',
            'icono' => 'ios-beer', 
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'Malteadas',
            'icono' => 'ios-beer', 
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'Tés',
            'icono' => 'ios-cafe', 
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'Postres',
            'icono' => 'ios-cream', 
        ]);
     
    }
}
