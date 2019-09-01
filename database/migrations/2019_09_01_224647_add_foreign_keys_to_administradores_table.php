<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAdministradoresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('administradores', function(Blueprint $table)
		{
			$table->foreign('id_usuario', 'fk_administ_reference_usuarios')->references('id_usuario')->on('usuarios_cli')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_sucursal', 'fk_administ_reference_sucursal')->references('id_sucursal')->on('sucursales')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('administradores', function(Blueprint $table)
		{
			$table->dropForeign('fk_administ_reference_usuarios');
			$table->dropForeign('fk_administ_reference_sucursal');
		});
	}

}
