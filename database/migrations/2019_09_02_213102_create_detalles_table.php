<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDetallesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('detalles', function(Blueprint $table)
		{
			$table->integer('id_detalle', true);
			$table->integer('id_categoria')->nullable();
			$table->string('nombreDetalle', 100);
			$table->text('descripcion')->nullable();
			$table->text('foto');
			$table->text('tipo_foto')->nullable();
			$table->float('precio', 10, 0)->nullable();
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
		Schema::drop('detalles');
	}

}
