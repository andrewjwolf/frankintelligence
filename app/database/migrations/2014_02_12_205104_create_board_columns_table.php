<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBoardColumnsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('board_columns', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('board_id');
			$table->integer('column_id');
			$table->timestamps();

            //$table->foreign('board_id')->references('id')->on('boards')->onDelete('cascade');
            //$table->foreign('column_id')->references('id')->on('columns')->onDelete('cascade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::dropIfExists('boards_columns');
	}

}
