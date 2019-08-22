<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      //  $this->truncateTables([
        //    'tipo_negocio'
        //]);
        $this->call(TablaTipoNegocioSeeder::class);
        $this->call(TablaNegocioSeeder::class);
        $this->call(TablaSucursalSeeder::class);
        $this->call(TablaPlatoSeeder::class);
        
        $this->call(TablaMenuSeeder::class);
        
        $this->call(TablaOpinionSeeder::class);
        $this->call(TablaPromocionSeeder::class);
        // $this->call(UsersTableSeeder::class);
    }
    //protected function truncateTables(array $tablas){
      //  DB::statement('SET FOREIGN_KEY= 0;');
       // foreach($tablas as $tabla){
         //   DB::table($tabla)->truncate();
       // }
       // DB::statement('SET FOREIGN_KEY =1;');
    //4} 'created_at' => Carbon::now()->format('Y-m-d H:i:s')
}
