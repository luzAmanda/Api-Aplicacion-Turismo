<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSucursalDetalleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('sucursal_detalle', function(Blueprint $table)
		{
			$table->foreign('id_sucursal', 'fk_sucursal_reference_sucursal')->references('id_sucursal')->on('sucursales')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_detalle', 'fk_sucursal_reference_detalle')->references('id_detalle')->on('detalle')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('sucursal_detalle', function(Blueprint $table)
		{
			$table->dropForeign('fk_sucursal_reference_sucursal');
			$table->dropForeign('fk_sucursal_reference_detalle');
		});
	}

}
