<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToNegociosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('negocios', function(Blueprint $table)
		{
			$table->foreign('id_tipo_negocio', 'fk_negocios_reference_tipo_neg')->references('id_tipo_negocio')->on('tipo_negocio')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('negocios', function(Blueprint $table)
		{
			$table->dropForeign('fk_negocios_reference_tipo_neg');
		});
	}

}
