<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToBitacoraTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('bitacora', function(Blueprint $table)
		{
			$table->foreign('id_usuario', 'fk_bitacora_reference_usuarios')->references('id_usuario')->on('usuarios_cli')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('bitacora', function(Blueprint $table)
		{
			$table->dropForeign('fk_bitacora_reference_usuarios');
		});
	}

}
