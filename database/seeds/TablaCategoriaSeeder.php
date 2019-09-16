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
         
            'nombre' => 'Comida Mexicana',
            'icono' => 'clipboard', 
        ]);


        DB::table('categorias')->insert([
         
            'nombre' => 'Platos fuertes',
            'icono' => 'restaurant', 
        ]);

        DB::table('categorias')->insert([
          
            'nombre' => 'Desyunos',
            'icono' => 'cafe', 
        ]);

       
        DB::table('categorias')->insert([
         
            'nombre' => 'Postres',
            'icono' => 'ice-cream', 
        ]);
        
        DB::table('categorias')->insert([
            
            'nombre' => 'Bebidas',
            'icono' => 'wine', 
        ]);

        // CAFETERIA
        DB::table('categorias')->insert([
         
            'nombre' => 'Cafés',
            'icono' => 'cafe', 
        ]);
        DB::table('categorias')->insert([
           
            'nombre' => 'Sanduches',
            'icono' => 'cafe', 
        ]);
        DB::table('categorias')->insert([
           
            'nombre' => 'Frappés',
            'icono' => 'wine', 
        ]);
        DB::table('categorias')->insert([
           
            'nombre' => 'Smoothies',
            'icono' => 'wine', 
        ]);
        DB::table('categorias')->insert([
           
            'nombre' => 'Malteadas',
            'icono' => 'wine', 
        ]);
        DB::table('categorias')->insert([
          
            'nombre' => 'Tés',
            'icono' => 'cafe', 
        ]);
        DB::table('categorias')->insert([
          
            'nombre' => 'Postres',
            'icono' => 'ice-cream', 
        ]);
    }
}
