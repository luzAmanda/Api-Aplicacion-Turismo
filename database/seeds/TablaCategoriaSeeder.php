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
            'nombreCategoria' => 'Platos',
            'icono' => 'ios-restaurant', 
        ]);
        DB::table('categorias')->insert([
            'nombreCategoria' => 'Postres',
            'icono' => 'ios-cream', 
        ]);
        DB::table('categorias')->insert([
            'nombreCategoria' => 'Desyunos',
            'icono' => 'ios-beer', 
        ]);
        DB::table('categorias')->insert([
            'nombreCategoria' => 'Bebidas',
            'icono' => 'ios-calculator', 
        ]);

        // CAFETERIA
        DB::table('categorias')->insert([
            'nombreCategoria' => 'Cafés',
            'icono' => 'ios-cafe', 
        ]);
        DB::table('categorias')->insert([
            'nombreCategoria' => 'Sanduches',
            'icono' => 'ios-cafe', 
        ]);
        DB::table('categorias')->insert([
            'nombreCategoria' => 'Frappés',
            'icono' => 'ios-beer', 
        ]);
        DB::table('categorias')->insert([
            'nombreCategoria' => 'Smoothies',
            'icono' => 'ios-beer', 
        ]);
        DB::table('categorias')->insert([
            'nombreCategoria' => 'Malteadas',
            'icono' => 'ios-beer', 
        ]);
        DB::table('categorias')->insert([
            'nombreCategoria' => 'Tés',
            'icono' => 'ios-cafe', 
        ]);
        DB::table('categorias')->insert([
            'nombreCategoria' => 'Postres',
            'icono' => 'ios-cream', 
        ]);
     
    }
}
