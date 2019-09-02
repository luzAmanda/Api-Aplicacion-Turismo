<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDetallesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('detalles', function(Blueprint $table)
		{
			$table->foreign('id_categoria', 'fk_detalle_reference_categoria')->references('id_categoria')->on('categorias')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('detalles', function(Blueprint $table)
		{
			$table->dropForeign('fk_detalle_reference_categoria');
		});
	}

}
