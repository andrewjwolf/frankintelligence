<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTasksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tasks', function(Blueprint $table) {
			$table->increments('id');
			$table->string('title');
			$table->text('description');
            $table->unsignedInteger('project_id');
			$table->unsignedInteger('field_type_id')->nullable();
			$table->unsignedInteger('priority_id')->nullable();
			$table->unsignedInteger('status_id')->nullable();
			$table->timestamps();

            $table->unique(array('project_id', 'id'));
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');


            $table->foreign('field_type_id')->references('id')->on('field_types')->onDelete('cascade');
            $table->foreign('priority_id')->references('id')->on('task_priorities')->onDelete('cascade');
            $table->foreign('status_id')->references('id')->on('task_status')->onDelete('cascade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::dropIfExists('tasks');
	}

}
