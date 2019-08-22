<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePromocionesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('promociones', function(Blueprint $table)
		{
			$table->integer('id_promocion',true);
			$table->integer('id_sucursal');
			$table->string('nombre', 100);
			$table->text('descripcion')->nullable();
			$table->text('foto');
			$table->integer('estado');
			$table->text('tipo_foto');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('promociones');
	}

}
