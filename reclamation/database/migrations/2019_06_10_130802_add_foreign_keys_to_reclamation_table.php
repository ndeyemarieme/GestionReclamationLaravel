<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToReclamationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('reclamation', function(Blueprint $table)
		{
			$table->foreign('matiere', 'reclamation_ibfk_1')->references('id')->on('matiere')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('etudiant', 'reclamation_ibfk_2')->references('id')->on('etudiant')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('reclamation', function(Blueprint $table)
		{
			$table->dropForeign('reclamation_ibfk_1');
			$table->dropForeign('reclamation_ibfk_2');
		});
	}

}
