<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSucursalesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sucursales', function(Blueprint $table)
		{
			$table->integer('id_sucursal', true);
			$table->integer('id_negocio');
			$table->string('nombre', 100);
			$table->string('celular', 15);
			$table->string('telefono', 10)->nullable();
			$table->text('direccion');
			$table->float('longitud', 10, 0);
			$table->float('latitud', 10, 0);
			$table->text('foto')->nullable();
			$table->text('tipo_foto')->nullable();
			$table->integer('estado');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sucursales');
	}

}
