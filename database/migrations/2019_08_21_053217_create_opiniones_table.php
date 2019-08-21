<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOpinionesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('opiniones', function(Blueprint $table)
		{
			$table->integer('id_opinion', true);
			$table->integer('id_sucursal');
			$table->string('titulo', 500);
			$table->text('opinion');
			$table->integer('calificacion');
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
		Schema::drop('opiniones');
	}

}
