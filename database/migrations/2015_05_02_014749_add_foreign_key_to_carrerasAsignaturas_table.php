<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyToCarrerasAsignaturasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('carrerasAsignaturas', function(Blueprint $table)
		{
			$table->foreign('carrera_id')->references('id')->on('carreras');
			$table->foreign('asignatura_id')->references('id')->on('asignaturas');
			$table->foreign('planEstudio_id')->references('id')->on('planEstudio');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('carrerasAsignaturas', function(Blueprint $table)
		{
			$table->dropForeign('carrerasAsignaturas_carrera_id_foreign');
			$table->dropForeign('carrerasAsignaturas_asignatura_id_foreign');
			$table->dropForeign('carrerasAsignaturas_planEstudio_id_foreign');
		});
	}

}
