<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProjectUserGroupsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('project_user_groups', function(Blueprint $table) {
			$table->increments('id');
			$table->unsignedInteger('project_id');
			$table->unsignedInteger('user_group_id');
			$table->timestamps();

            //$table->foreign('user_group_id')->references('id')->on('user_groups')->onDelete('cascade');
            //$table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::dropIfExists('project_user_groups');
	}

}
