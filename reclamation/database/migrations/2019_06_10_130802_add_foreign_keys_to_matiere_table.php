<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToMatiereTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('matiere', function(Blueprint $table)
		{
			$table->foreign('module', 'matiere_ibfk_1')->references('id')->on('module')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('matiere', function(Blueprint $table)
		{
			$table->dropForeign('matiere_ibfk_1');
		});
	}

}
