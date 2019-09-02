<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSucursalDetalleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sucursal_detalle', function(Blueprint $table)
		{
			$table->integer('id_sucursaldetalle', true);
			$table->integer('id_sucursal')->nullable();
			$table->integer('id_detalle')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sucursal_detalle');
	}

}
