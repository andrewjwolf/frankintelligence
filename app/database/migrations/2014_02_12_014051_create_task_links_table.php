<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTaskLinksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('task_links', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('task_id');
            $table->integer('link_type_id');
			$table->integer('task_link_id');
			$table->timestamps();

            //$table->foreign('task_id')->references('id')->on('tasks')->onDelete('cascade');
            //$table->foreign('task_type_id')->references('id')->on('task_types')->onDelete('cascade');
            //$table->foreign('task_link_id')->references('id')->on('task_links')->onDelete('cascade');

		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::dropIfExists('task_links');
	}

}
