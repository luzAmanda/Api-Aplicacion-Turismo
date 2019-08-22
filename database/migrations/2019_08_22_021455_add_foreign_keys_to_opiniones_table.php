<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToOpinionesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('opiniones', function(Blueprint $table)
		{
			$table->foreign('id_sucursal', 'fk_califica_reference_sucursal')->references('id_sucursal')->on('sucursales')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('opiniones', function(Blueprint $table)
		{
			$table->dropForeign('fk_califica_reference_sucursal');
		});
	}

}
