<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReclamationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('reclamation', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('etudiant')->index('etudiant');
			$table->integer('matiere')->index('matiere');
			$table->float('noteObtenue', 10, 0);
			$table->integer('dateReclamation');
			$table->integer('objetReclamation');
			$table->timestamps();
			$table->dateTime('deleted_at')->default('0000-00-00 00:00:00');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('reclamation');
	}

}
