<?php

use App\Models\Event;

class EventsTableSeeder extends Seeder {

	public function run()
	{
		DB::table('events')->delete();
		
		Event::create(array(
            'user_id' => 4,
            'hobby_id' => 2,
            'name'   => 'eMag Hackathon',
            'slug'    => 'emag-hackathon',
            'descr'    => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',            
            'start' => Carbon\Carbon::now(),
            'end' => Carbon\Carbon::now()->addHours(3)->addMinutes(21),            
            'address' => 'Pipera - Emag',
			'image' => '/assets/files/somepic.jpg',
			'created_at' => Carbon\Carbon::now()->subWeek(),
			'updated_at' => Carbon\Carbon::now()->subWeek(),				
        ));     
        Event::create(array(
            'user_id' => 3,
            'hobby_id' => 3,
            'name'   => 'Tenis de masa la Viva Sport Club',
            'slug'    => 'tenis',
            'descr'    => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'start' => Carbon\Carbon::now()->addMinutes(17),
            'end' => Carbon\Carbon::now()->addHours(1)->addMinutes(42),        
            'address' => 'Viva Sport Club',
			'image' => '/assets/files/somepic1.jpg',			
			'created_at' => Carbon\Carbon::now(),
			'updated_at' => Carbon\Carbon::now(),				
        ));     
        Event::create(array(
            'user_id' => 5,
            'hobby_id' => 4,
            'name'   => 'Turneu SkyKarting',
            'slug'    => 'turneu',
            'descr'    => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'start' => Carbon\Carbon::now()->addHours(7)->addMinutes(5),
            'end' => Carbon\Carbon::now()->addHours(10)->addMinutes(2),
            'address' => 'SkyKarting, Pipera',
			'image' => '/assets/files/somepic2.jpg',			
			'created_at' => Carbon\Carbon::now()->subMonth(),
			'updated_at' => Carbon\Carbon::now()->subMonth(),				
        ));     
	}

}
