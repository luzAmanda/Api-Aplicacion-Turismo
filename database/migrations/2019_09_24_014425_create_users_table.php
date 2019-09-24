<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('cedula', 13);
			$table->string('nombre', 100);
			$table->string('apellido', 100);
			$table->text('direccion');
			$table->string('telefono', 10)->nullable();
			$table->string('celular', 10);
			$table->string('correo', 50);
			$table->text('password');
			$table->integer('estado');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
