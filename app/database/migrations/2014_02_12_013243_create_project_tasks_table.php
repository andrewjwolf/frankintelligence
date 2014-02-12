<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProjectTasksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('project_tasks', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('project_id');
			$table->integer('task_id');
			$table->timestamps();

            //$table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
            //$table->foreign('task_id')->references('id')->on('tasks')->onDelete('cascade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::dropIfExists('project_tasks');
	}

}
