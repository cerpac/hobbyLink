<?php

use App\Models\Hobby;

class HobbiesTableSeeder extends Seeder {

	public function run()
	{
        DB::table('hobbies')->delete();
        
        Hobby::create(array(
				'name'   => 'Sport',
				'slug'    => 'sport',
				'parent_id'    => 0,
		));
        Hobby::create(array(
				'name'   => 'Tenis de masa',
				'slug'    => 'tenis',
				'parent_id'    => 1,
		));    
        Hobby::create(array(
				'name'   => 'Karting',
				'slug'    => 'karting',
				'parent_id'    => 1,
		));    
		Hobby::create(array(
				'name'   => 'Fotbal',
				'slug'    => 'fotbal',
				'parent_id'    => 1,
		));   
		Hobby::create(array(
				'name'   => 'Muzica',
				'slug'    => 'muzica',
				'parent_id'    => 0,
		));   
		Hobby::create(array(
				'name'   => 'Chitara',
				'slug'    => 'chitara',
				'parent_id'    => 5,
		));   
		Hobby::create(array(
				'name'   => 'Tobe',
				'slug'    => 'tobe',
				'parent_id'    => 5,
		));   
		Hobby::create(array(
				'name'   => 'Bookclub',
				'slug'    => 'bookclub',
				'parent_id'    => 0,
		)); 
		Hobby::create(array(
				'name'   => 'Coding',
				'slug'    => 'coding',
				'parent_id'    => 0,
		)); 
		Hobby::create(array(
				'name'   => 'Arduino',
				'slug'    => 'arduino',
				'parent_id'    => 0,
		)); 
		Hobby::create(array(
				'name'   => 'Dans',
				'slug'    => 'dans',
				'parent_id'    => 0,
		)); 
		Hobby::create(array(
				'name'   => 'Snooker',
				'slug'    => 'snooker',
				'parent_id'    => 0,
		)); 
		Hobby::create(array(
				'name'   => 'Rafting',
				'slug'    => 'rafting',
				'parent_id'    => 0,
		)); 
		Hobby::create(array(
				'name'   => 'Alpinism',
				'slug'    => 'alpinism',
				'parent_id'    => 0,
		)); 
		Hobby::create(array(
				'name'   => 'Bookclub',
				'slug'    => 'bookclub',
				'parent_id'    => 0,
		)); 
		
		
		
		
	}

}
