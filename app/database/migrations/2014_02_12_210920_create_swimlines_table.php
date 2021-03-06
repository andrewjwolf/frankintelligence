<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSwimlinesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('swimlines', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->unsignedInteger('field_id');
			$table->timestamps();

            //$table->foreign('field_id')->references('id')->on('fields')->onDelete('cascade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('swimlines');
	}

}
