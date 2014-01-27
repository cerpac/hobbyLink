<?php

use Illuminate\Database\Migrations\Migration;

class CreateUserHobbiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('user_hobbies', function($table)
        {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('hobby_id');
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
        Schema::drop('user_hobbies');
	}

}