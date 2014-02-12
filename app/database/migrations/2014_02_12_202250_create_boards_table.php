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
			$table->unsignedInteger('project_id');
			$table->string('name');
			$table->text('description')->nullable();
			$table->timestamps();

            $table->unique(array('project_id', 'id'));
            //$table->foreign('project_id')->references('id')->on('projects');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('boards');
	}

}
