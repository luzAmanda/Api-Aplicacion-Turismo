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
			$table->integer('id_sucursalcategoria')->nullable();
			$table->string('nombre', 100);
			$table->text('descripcion')->nullable();
			$table->text('foto');
			$table->text('tipo_foto')->nullable();
			$table->float('precio', 10, 0)->nullable();
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
		Schema::drop('detalles');
	}

}
