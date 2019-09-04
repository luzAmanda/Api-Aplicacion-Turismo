<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPropietariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('propietarios', function(Blueprint $table)
		{
			$table->foreign('id_usuario', 'fk_propieta_reference_usuarios')->references('id_usuario')->on('usuarios_cli')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('propietarios', function(Blueprint $table)
		{
			$table->dropForeign('fk_propieta_reference_usuarios');
		});
	}

}
