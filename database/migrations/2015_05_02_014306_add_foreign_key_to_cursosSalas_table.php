<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyToCursosSalasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('cursosSalas', function(Blueprint $table)
		{
			$table->foreign('sala_id')->references('id')->on('salas');
			$table->foreign('curso_id')->references('id')->on('cursos');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('cursosSalas', function(Blueprint $table)
		{
			$table->dropForeign('cursosSalas_sala_id_foreign');
			$table->dropForeign('cursosSalas_curso_id_foreign');
		});
	}

}
