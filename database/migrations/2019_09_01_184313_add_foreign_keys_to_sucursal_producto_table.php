<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSucursalProductoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('sucursal_producto', function(Blueprint $table)
		{
			$table->foreign('id_sucursal', 'fk_sucursal_reference_sucursal')->references('id_sucursal')->on('sucursales')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_producto', 'fk_sucursal_reference_producto')->references('id_producto')->on('producto')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('sucursal_producto', function(Blueprint $table)
		{
			$table->dropForeign('fk_sucursal_reference_sucursal');
			$table->dropForeign('fk_sucursal_reference_producto');
		});
	}

}
