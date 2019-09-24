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
			$table->integer('id_promocion')->primary('pk_promociones');
			$table->integer('id_sucursal')->nullable();
			$table->string('nombre', 100);
			$table->text('descripcion');
			$table->integer('estado');
			$table->text('foto')->nullable();
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
