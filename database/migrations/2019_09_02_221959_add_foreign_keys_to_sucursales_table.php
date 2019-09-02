<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSucursalesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('sucursales', function(Blueprint $table)
		{
			$table->foreign('id_negocio', 'fk_sucursal_reference_negocios')->references('id_negocio')->on('negocios')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('sucursales', function(Blueprint $table)
		{
			$table->dropForeign('fk_sucursal_reference_negocios');
		});
	}

}
