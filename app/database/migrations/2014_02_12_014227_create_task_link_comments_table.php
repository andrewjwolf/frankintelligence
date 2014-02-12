<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTaskLinkCommentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('task_link_comments', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('task_link_id');
			$table->integer('comment_id');
			$table->timestamps();

            //$table->foreign('task_link_id')->references('id')->on('task_links')->onDelete('cascade');
            //$table->foreign('task_comment_id')->references('id')->on('task_comments')->onDelete('cascade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::dropIfExists('task_link_comments');
	}

}
