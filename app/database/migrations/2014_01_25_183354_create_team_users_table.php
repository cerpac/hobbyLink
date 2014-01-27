<?php

use Illuminate\Database\Migrations\Migration;

class CreateTeamUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('team_users', function($table) {
            $table->increments('id');
            $table->integer('team_id');
            $table->integer('user_id');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('team_users');
	}

}