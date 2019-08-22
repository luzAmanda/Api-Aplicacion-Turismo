<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToMenusTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('menus', function(Blueprint $table)
		{
			$table->foreign('id_bebida', 'fk_menus_reference_bebidas')->references('id_bebida')->on('bebidas')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_postre', 'fk_menus_reference_postres')->references('id_postre')->on('postres')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_combo', 'fk_menus_reference_combos')->references('id_combo')->on('combos')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_sucursal', 'fk_menus_reference_sucursal')->references('id_sucursal')->on('sucursales')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_plato', 'fk_menus_reference_platos')->references('id_plato')->on('platos')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('menus', function(Blueprint $table)
		{
			$table->dropForeign('fk_menus_reference_bebidas');
			$table->dropForeign('fk_menus_reference_postres');
			$table->dropForeign('fk_menus_reference_combos');
			$table->dropForeign('fk_menus_reference_sucursal');
			$table->dropForeign('fk_menus_reference_platos');
		});
	}

}
