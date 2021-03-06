<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTaskCommentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('task_comments', function(Blueprint $table) {
			$table->increments('id');
			$table->unsignedInteger('task_id');
			$table->unsignedInteger('comment_id');
			$table->timestamps();

            //$table->foreign('task_id')->references('id')->on('tasks')->onDelete('cascade');
            //$table->foreign('comment_id')->references('id')->on('comments')->onDelete('cascade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::dropIfExists('task_comments');
	}

}
