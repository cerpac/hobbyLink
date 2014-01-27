<?php

use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('events', function($table) {
            $table->increments('id');
            $table->integer('hobby_id');
            $table->integer('user_id');
            $table->string('name', 255);
            $table->string('slug', 255);
            $table->string('address', 250);
            $table->string('image', 250);		
            $table->text('descr')->nullable();
            $table->dateTime('start');
            $table->dateTime('end');
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
        Schema::drop('events');
	}

}