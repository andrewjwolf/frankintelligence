<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTaskAttachmentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('task_attachments', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('task_id');
			$table->integer('attachment_id');
			$table->timestamps();

            //$table->foreign('task_id')->references('id')->on('tasks')->onDelete('cascade');
            //$table->foreign('attachment_id')->references('id')->on('attachment')->onDelete('cascade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::dropIfExists('task_attachments');
	}

}
