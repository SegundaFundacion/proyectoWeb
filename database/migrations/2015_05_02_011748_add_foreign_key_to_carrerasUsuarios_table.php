<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyToCarrerasUsuariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('carrerasUsuarios', function(Blueprint $table)
		{
			$table->foreign('rut_id')->references('id')->on('usuarios');
			$table->foreign('carrera_id')->references('id')->on('carreras');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('carrerasUsuarios', function(Blueprint $table)
		{
			$table->dropForeign('carrerasUsuarios_rut_id_foreign');
            $table->dropForeign('carrerasUsuarios_carrera_id_foreign');
		});
	}

}
