<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSucursalCategoriaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sucursal_categoria', function(Blueprint $table)
		{
			$table->integer('id_sucursalcategoria', true);
			$table->integer('id_sucursal')->nullable();
			$table->integer('id_categoria')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sucursal_categoria');
	}

}
