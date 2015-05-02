<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarrerasAsignaturasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('carrerasAsignaturas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('carrera_id');
			$table->integer('asignatura_id');
			$table->integer('planEstudio_id');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('carrerasAsignaturas');
	}

}
