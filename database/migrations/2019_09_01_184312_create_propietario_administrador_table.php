<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePropietarioAdministradorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('propietario_administrador', function(Blueprint $table)
		{
			$table->integer('id_propietarioadministrador', true);
			$table->integer('id_administrador')->nullable();
			$table->integer('id_propietario')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('propietario_administrador');
	}

}
