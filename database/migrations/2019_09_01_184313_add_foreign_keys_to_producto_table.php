<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToProductoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('producto', function(Blueprint $table)
		{
			$table->foreign('id_categoria', 'fk_producto_reference_categori')->references('id_categoria')->on('categoria')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('producto', function(Blueprint $table)
		{
			$table->dropForeign('fk_producto_reference_categori');
		});
	}

}
