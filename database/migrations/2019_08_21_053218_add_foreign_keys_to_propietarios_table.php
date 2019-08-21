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
			$table->foreign('id_usuario', 'fk_propieta_reference_users')->references('id_usuario')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
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
			$table->dropForeign('fk_propieta_reference_users');
		});
	}

}
