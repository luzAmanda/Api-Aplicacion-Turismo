<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSucursalCategoriaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('sucursal_categoria', function(Blueprint $table)
		{
			$table->foreign('id_categoria', 'fk_sucursal_reference_categori')->references('id_categoria')->on('categorias')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_sucursal', 'fk_sucursal_reference_sucursal')->references('id_sucursal')->on('sucursales')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('sucursal_categoria', function(Blueprint $table)
		{
			$table->dropForeign('fk_sucursal_reference_categori');
			$table->dropForeign('fk_sucursal_reference_sucursal');
		});
	}

}
