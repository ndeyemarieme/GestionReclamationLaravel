<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEtudiantTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('etudiant', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('nom', 50);
			$table->string('prenom', 50);
			$table->string('mail', 50);
			$table->date('datenaiss');
			$table->string('matricule', 50);
			$table->string('pw', 200);
    		$table->timestamps();
			$table->softDeletes();
			$table->integer('classe')->index('classe');
		});
    }


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('etudiant');
	}

}
