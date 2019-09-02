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
			$table->integer('id_promocion')->primary('promociones_pkey');
			$table->integer('id_sucursal')->nullable();
			$table->string('nombre', 100);
			$table->text('descripcion');
			$table->text('foto')->nullable();
			$table->integer('estado');
			$table->text('tipo_foto')->nullable();
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
