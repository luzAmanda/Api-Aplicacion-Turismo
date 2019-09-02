<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPromocionesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('promociones', function(Blueprint $table)
		{
			$table->foreign('id_sucursal', 'fk_promocio_reference_sucursal')->references('id_sucursal')->on('sucursales')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('promociones', function(Blueprint $table)
		{
			$table->dropForeign('fk_promocio_reference_sucursal');
		});
	}

}
