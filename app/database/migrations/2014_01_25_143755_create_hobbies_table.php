<?php

use Illuminate\Database\Migrations\Migration;

class CreateHobbiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('hobbies', function($table)
        {
            $table->increments('id');
            $table->integer('parent_id');
            $table->string('name');
            $table->string('slug');
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
        Schema::drop('hobbies');
	}

}