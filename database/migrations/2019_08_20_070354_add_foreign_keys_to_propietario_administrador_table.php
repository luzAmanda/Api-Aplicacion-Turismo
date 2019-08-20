<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPropietarioAdministradorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('propietario_administrador', function(Blueprint $table)
		{
			$table->foreign('id_administrador', 'fk_propieta_reference_administ')->references('id_administrador')->on('administradores')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_propietario', 'fk_propieta_reference_propieta')->references('id_propietario')->on('propietarios')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('propietario_administrador', function(Blueprint $table)
		{
			$table->dropForeign('fk_propieta_reference_administ');
			$table->dropForeign('fk_propieta_reference_propieta');
		});
	}

}
