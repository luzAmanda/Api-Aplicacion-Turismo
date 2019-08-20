<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePlatosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('platos', function(Blueprint $table)
		{
			$table->integer('id_plato', true);
			$table->string('nombre', 100);
			$table->text('descripcion')->nullable();
			$table->float('precio', 10, 0)->nullable();
			$table->text('foto')->nullable();
			$table->text('tipo_foto')->nullable();
			$table->integer('estado');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('platos');
	}

}
