<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNegociosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('negocios', function(Blueprint $table)
		{
			$table->integer('id_negocio', true);
			$table->integer('id_tiponegocio')->nullable();
			$table->string('nombre', 100);
			$table->text('descripcion')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('negocios');
	}

}
