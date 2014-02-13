<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFieldsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fields', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->unsignedInteger('field_type_id');
            $table->boolean('can_be_empty')->defaults(1);
            $table->string('default_value')->nullable();
            $table->string('empty_value')->nullable();
			$table->timestamps();

            //$table->foreign('field_type_id')->references('id')->on('field_types')->onDelete('cascade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('fields');
	}

}
