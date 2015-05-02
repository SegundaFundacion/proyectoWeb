<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyToSalasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('salas', function(Blueprint $table)
		{
			$table->foreign('facultad_id')->references('id')->on('facultades');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('salas', function(Blueprint $table)
		{
			$table->dropForeign('salas_facultad_id_foreign');
		});
	}

}
