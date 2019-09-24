<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTipoNegocioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tipo_negocio', function(Blueprint $table)
		{
			$table->foreign('id_sector', 'fk_tipo_neg_reference_sectores')->references('id_sector')->on('sectores')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tipo_negocio', function(Blueprint $table)
		{
			$table->dropForeign('fk_tipo_neg_reference_sectores');
		});
	}

}
