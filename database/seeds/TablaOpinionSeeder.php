<?php
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TablaOpinionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('opiniones')->insert([
            'id_sucursal' => 1,
            'titulo'=>'titulo de la opinión 1',
            'opinion'=>Str::random(100),
            'calificacion' =>5,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            
        ]);
        DB::table('opiniones')->insert([
            'id_sucursal' => 1,
            'titulo'=>'titulo de la opinión 1.1',
            'opinion'=>Str::random(100),
            'calificacion' =>3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            
        ]);
        DB::table('opiniones')->insert([
            'id_sucursal' => 2,
            'titulo'=>'titulo de la opinión 2',
            'opinion'=>Str::random(100),
            'calificacion' =>5,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            
        ]);
        DB::table('opiniones')->insert([
            'id_sucursal' => 7,
            'titulo'=>'titulo de la opinión 7',
            'opinion'=>Str::random(100),
            'calificacion' =>5,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            
        ]);
    }
}
