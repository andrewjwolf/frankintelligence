<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBoardSwimlinesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('board_swimlines', function(Blueprint $table) {
			$table->increments('id');
			$table->unsignedInteger('board_id');
			$table->unsignedInteger('swimline_id');
			$table->timestamps();

            //$table->foreign('board_id')->references('id')->on('boards')->onDelete('cascade');
            //$table->foreign('swimline_id')->references('id')->on('swimlines')->onDelete('cascade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::dropIfExists('board_swimlines');
	}

}
