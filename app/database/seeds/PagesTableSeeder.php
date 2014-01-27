<?php 

use App\Models\Page;

class PagesTableSeeder extends Seeder {

	public function run()
	{
        DB::table('pages')->delete();
        
        Page::create(array(
				'title'   => 'Despre noi',
				'slug'    => 'despre',
				'body'    => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
				'user_id' => 1,
				'created_at' => Carbon\Carbon::now()->subWeek(),
				'updated_at' => Carbon\Carbon::now()->subWeek(),				
		));
        
		Page::create(array(
				'title'   => 'Contact',
				'slug'    => 'contact',
				'body'    => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
				'user_id' => 1,
				'created_at' => Carbon\Carbon::now()->subDay(),
				'updated_at' => Carbon\Carbon::now()->subDay(),
		));		
	
	}

}
