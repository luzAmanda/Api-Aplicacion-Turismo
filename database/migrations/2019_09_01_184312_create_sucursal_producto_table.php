<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSucursalProductoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sucursal_producto', function(Blueprint $table)
		{
			$table->integer('id_sucursalproducto', true);
			$table->integer('id_sucursal')->nullable();
			$table->integer('id_producto')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sucursal_producto');
	}

}
