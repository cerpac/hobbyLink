<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserdetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_details', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id');
			$table->string('type', 20)->default('free');
			$table->string('first_name', 100);
			$table->string('last_name', 100);
			$table->string('mobile', 50);
			$table->string('address', 250);
			$table->text('descr')->nullable();
			$table->string('city', 100);
			$table->string('image', 255);
			$table->string('country', 100)->default('Romania');
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
		Schema::drop('user_details');
	}

}
