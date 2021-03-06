<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTipoNegocioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tipo_negocio', function(Blueprint $table)
		{
			$table->integer('id_tiponegocio', true);
			$table->integer('id_sector')->nullable();
			$table->string('nombre', 100);
			$table->text('descripcion')->nullable();
			$table->string('icono', 20)->nullable();
			$table->integer('estado')->nullable();
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
		Schema::drop('tipo_negocio');
	}

}
