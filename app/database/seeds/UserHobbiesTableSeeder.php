<?php

class UserHobbiesTableSeeder extends Seeder {

	public function run()
	{
        DB::table('user_hobbies')->delete();
        
		DB::table('user_hobbies')->insert(array(
			array('user_id' => '2', 'hobby_id' => 2),
			array('user_id' => '2', 'hobby_id' => 3),
			array('user_id' => '2', 'hobby_id' => 4),
			array('user_id' => '3', 'hobby_id' => 1),
			array('user_id' => '3', 'hobby_id' => 7),
			array('user_id' => '3', 'hobby_id' => 6),
			array('user_id' => '4', 'hobby_id' => 3),
			array('user_id' => '4', 'hobby_id' => 9),
			array('user_id' => '4', 'hobby_id' => 8),
			array('user_id' => '5', 'hobby_id' => 2),			
			array('user_id' => '5', 'hobby_id' => 10),						
			array('user_id' => '5', 'hobby_id' => 2),			
			array('user_id' => '5', 'hobby_id' => 11)						
		));
		
	}

}
