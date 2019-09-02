<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsuariosCliTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usuarios_cli', function(Blueprint $table)
		{
			$table->integer('id_usuario', true);
			$table->string('cedula', 13);
			$table->string('nombre', 100);
			$table->string('apellido', 100);
			$table->text('direccion');
			$table->string('telefono', 10)->nullable();
			$table->string('celular', 10);
			$table->string('correo', 50);
			$table->string('password', 50);
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
		Schema::drop('usuarios_cli');
	}

}
