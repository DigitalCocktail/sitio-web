<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SuscriptoresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('suscriptor', function(Blueprint $table)
		{
			$table->increments('id');		
			$table->string('nombre', 255);
			$table->string('email', 100);
			$table->string('telefono', 100);
			$table->boolean('blog');
			$table->boolean('eventos');
			$table->boolean('promociones');
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
		Schema::drop('suscriptor');
	}

}
