<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyToPlanEstudioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('planEstudio', function(Blueprint $table)
		{
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
		Schema::table('planEstudio', function(Blueprint $table)
		{
			$table->dropForeign('planEstudio_carrera_id_foreign');
		});
	}

}
