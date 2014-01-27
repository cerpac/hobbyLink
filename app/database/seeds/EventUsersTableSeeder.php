<?php

class EventUsersTableSeeder extends Seeder {

	public function run()
	{
        DB::table('event_users')->delete();
        
		DB::table('event_users')->insert(array(
			array('user_id' => '2', 'event_id' => 1),
			array('user_id' => '3', 'event_id' => 1),
			array('user_id' => '4', 'event_id' => 1),
			array('user_id' => '5', 'event_id' => 1)			
		));
		
	}

}
