<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToRoleUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('role_user', function(Blueprint $table)
		{
			$table->foreign('id_roles', 'fk_role_use_reference_roles')->references('id_roles')->on('roles')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_usuario', 'fk_role_use_reference_usuarios')->references('id_usuario')->on('usuarios_cli')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('role_user', function(Blueprint $table)
		{
			$table->dropForeign('fk_role_use_reference_roles');
			$table->dropForeign('fk_role_use_reference_usuarios');
		});
	}

}
