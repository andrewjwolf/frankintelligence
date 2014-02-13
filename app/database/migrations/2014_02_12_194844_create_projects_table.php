<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProjectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('projects', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name')->unique();
			$table->integer('starting_number');
			$table->unsignedInteger('lead_user_id');
			$table->unsignedInteger('repository_id')->nullable();
			$table->text('description')->nullable();
			$table->string('from_email')->nullable();
			$table->boolean('has_time_tracking')->default(0);
			$table->boolean('has_estimate')->default(0);
			$table->unsignedInteger('estimate_field_id')->nullable();
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('projects');
	}

}
