<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBoardsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('boards', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('project_id');
			$table->string('name');
			$table->text('description')->nullable();
			$table->timestamps();

            //$table->foreign('project_id')->references('id')->on('project_boards')->onDelete('cascade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::dropIfExists('boards');
	}

}
