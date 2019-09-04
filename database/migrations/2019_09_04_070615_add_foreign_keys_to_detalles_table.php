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
			$table->foreign('id_sucursalcategoria', 'fk_detalles_reference_sucursal')->references('id_sucursalcategoria')->on('sucursal_categoria')->onUpdate('RESTRICT')->onDelete('RESTRICT');
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
			$table->dropForeign('fk_detalles_reference_sucursal');
		});
	}

}
