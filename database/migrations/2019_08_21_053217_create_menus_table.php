<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMenusTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('menus', function(Blueprint $table)
		{
			$table->integer('id_menu', true);
			$table->integer('id_sucursal')->nullable();
			$table->integer('id_bebida')->nullable();
			$table->integer('id_postre')->nullable();
			$table->integer('id_combo')->nullable();
			$table->integer('id_plato')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('menus');
	}

}
