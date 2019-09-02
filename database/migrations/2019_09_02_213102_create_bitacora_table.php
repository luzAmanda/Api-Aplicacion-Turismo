<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBitacoraTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bitacora', function(Blueprint $table)
		{
			$table->integer('id_bitacora', true);
			$table->integer('id_usuario')->nullable();
			$table->string('ip', 30);
			$table->string('accion', 100);
			$table->date('fecha');
			$table->text('descripcion');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('bitacora');
	}

}
