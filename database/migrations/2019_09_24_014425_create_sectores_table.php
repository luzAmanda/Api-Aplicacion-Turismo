<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSectoresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sectores', function(Blueprint $table)
		{
			$table->integer('id_sector', true);
			$table->string('nombre', 100)->nullable();
			$table->string('icono', 20)->nullable();
			$table->integer('estado')->nullable();
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
		Schema::drop('sectores');
	}

}
