<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyToCarrerasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('carreras', function(Blueprint $table)
		{
			$table->foreign('facultad_id')->references('id')->on('facultades');
            $table->foreign('rut_id')->references('id')->on('usuarios');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('carreras', function(Blueprint $table)
		{
			$table->dropForeign('carreras_facultad_id_foreign');
            $table->dropForeign('carreras_rut_id_foreign');
		});
	}

}
