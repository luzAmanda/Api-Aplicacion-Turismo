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
            'icono' => 'restaurant', 
        ]);
        DB::table('categorias')->insert([
         
            'nombre' => 'Postres',
            'icono' => 'cream', 
        ]);
        DB::table('categorias')->insert([
          
            'nombre' => 'Desyunos',
            'icono' => 'beer', 
        ]);
        DB::table('categorias')->insert([
            
            'nombre' => 'Bebidas',
            'icono' => 'calculator', 
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
            'icono' => 'beer', 
        ]);
        DB::table('categorias')->insert([
           
            'nombre' => 'Smoothies',
            'icono' => 'beer', 
        ]);
        DB::table('categorias')->insert([
           
            'nombre' => 'Malteadas',
            'icono' => 'beer', 
        ]);
        DB::table('categorias')->insert([
          
            'nombre' => 'Tés',
            'icono' => 'cafe', 
        ]);
        DB::table('categorias')->insert([
          
            'nombre' => 'Postres',
            'icono' => 'cream', 
        ]);
     
    }
}
