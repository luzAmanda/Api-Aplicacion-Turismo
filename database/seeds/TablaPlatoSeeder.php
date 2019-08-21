<?php

use Illuminate\Database\Seeder;

class TablaPlatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('platos')->insert([
            'nombre' => 'plato 1',
            'descripcion' => 'Descripción plato 1',
            'precio'=>'23.2',
            'estado'=>1
           
        ]);

                 //inicializamos Faker en modo Español
      $faker = Faker\Factory::create('es_ES');

      for($a = 0; $a < 2; $a++) {

         //Aquí obtenemos la imagen aleatoria 640x480
         $img = file_get_contents($faker->imageUrl('640', '480'));
         $username =  $faker->userName;
         $fileName = str_random(5).'-'.$username.'.jpg';         

         //creamos el user guardando el nombre de la imágen.
         $user = User::create(array(
            'first_name' => $faker->firstname,
            'last_name' => $faker->lastname,            
            'avatar' => $fileName,
         ));

         //Y la guardamos en el servidor.
         file_put_contents("public/images/avatares/$fileName", $img);
      }



        DB::table('platos')->insert([
            'nombre' => 'plato 2',
            'descripcion' => 'Descripción plato 2',
            'precio'=>'23.2',
            'estado'=>1
           
        ]);
        DB::table('platos')->insert([
            'nombre' => 'plato 3',
            'descripcion' => 'Descripción plato 3',
            'precio'=>'23.2',
            'estado'=>1
           
        ]);

        DB::table('bebidas')->insert([
            'nombre' => 'bebida 1',
            'descripcion' => 'Descripción bebida 1',
            'precio'=>'23.2',
            'estado'=>1
           
        ]);
        DB::table('bebidas')->insert([
            'nombre' => 'bebida 2',
            'descripcion' => 'Descripción bebida 2',
            'precio'=>'23.2',
            'estado'=>1
           
        ]);
        DB::table('bebidas')->insert([
            'nombre' => 'bebida 3',
            'descripcion' => 'Descripción bebida 3',
            'precio'=>'23.2',
            'estado'=>1
           
        ]);
        DB::table('postres')->insert([
            'nombre' => 'postre 1',
            'descripcion' => 'Descripción postre 1',
            'precio'=>'4.2',
            'estado'=>1
           
        ]);
        DB::table('postres')->insert([
            'nombre' => 'postre 2',
            'descripcion' => 'Descripción postre 2',
            'precio'=>'9.2',
            'estado'=>1
           
        ]);
        DB::table('postres')->insert([
            'nombre' => 'postre 3',
            'descripcion' => 'Descripción postre 3',
            'precio'=>'5',
            'estado'=>1
           
        ]);
    }
}
