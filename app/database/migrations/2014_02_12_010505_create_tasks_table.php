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
			$table->text('description')->nullable;
			$table->integer('field_type_id')->nullable();
			$table->integer('priority_id')->nullable();
			$table->integer('status_id')->nullable();
			$table->timestamps();

            //$table->foreign('id')->references('task_id')->on('tasks_assignments')->onDelete('cascade');
            //$table->foreign('field_type_id')->references('id')->on('field_types')->onDelete('cascade');
            //$table->foreign('priority_id')->references('id')->on('task_priorities')->onDelete('cascade');
            //$table->foreign('status_id')->references('id')->on('task_status')->onDelete('cascade');
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
