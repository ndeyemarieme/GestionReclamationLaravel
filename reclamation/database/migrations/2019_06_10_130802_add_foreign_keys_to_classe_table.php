<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToClasseTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('classe', function(Blueprint $table)
		{
			$table->foreign('filiere', 'classe_ibfk_1')->references('id')->on('filiere')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('classe', function(Blueprint $table)
		{
			$table->dropForeign('classe_ibfk_1');
		});
	}

}
