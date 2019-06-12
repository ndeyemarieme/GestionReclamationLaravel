<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToModuleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('module', function(Blueprint $table)
		{
			$table->foreign('classe', 'module_ibfk_1')->references('id')->on('classe')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('module', function(Blueprint $table)
		{
			$table->dropForeign('module_ibfk_1');
		});
	}

}
