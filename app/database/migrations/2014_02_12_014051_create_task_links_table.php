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
			$table->unsignedInteger('task_id');
            $table->unsignedInteger('link_type_id');
			$table->unsignedInteger('task_link_id');
			$table->timestamps();

            $table->foreign('task_id')->references('id')->on('tasks')->onDelete('cascade');
            $table->foreign('link_type_id')->references('id')->on('task_types')->onDelete('cascade');


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
