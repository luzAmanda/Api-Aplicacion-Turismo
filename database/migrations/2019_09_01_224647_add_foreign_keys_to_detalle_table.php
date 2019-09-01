<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDetalleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('detalle', function(Blueprint $table)
		{
			$table->foreign('id_categoria', 'fk_detalle_reference_categori')->references('id_categoria')->on('categoria')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('detalle', function(Blueprint $table)
		{
			$table->dropForeign('fk_detalle_reference_categori');
		});
	}

}
