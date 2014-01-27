<?php

class UserdetailsTableSeeder extends Seeder {

	public function run()
	{
        DB::table('user_details')->delete();
        
        UserDetail::create(array(
				'first_name'   => 'Admin',
				'last_name'    => 'Smith',
				'user_id'    => 1,
				'created_at' => Carbon\Carbon::now(),
				'updated_at' => Carbon\Carbon::now(),				
		));
        UserDetail::create(array(
				'first_name'   => 'Traian',
				'last_name'    => 'Cazacu',
				'image'    => '/assets/files/photo-11.jpg',				
				'user_id'    => 2,
				'created_at' => Carbon\Carbon::now(),
				'updated_at' => Carbon\Carbon::now(),				
		));
        UserDetail::create(array(
				'first_name'   => 'Florian',
				'last_name'    => 'Cazacu',
				'image'    => '/assets/files/photo-12.png',				
				'user_id'    => 3,
				'created_at' => Carbon\Carbon::now(),
				'updated_at' => Carbon\Carbon::now(),				
		));
        UserDetail::create(array(
				'first_name'   => 'Andrei',
				'last_name'    => 'Tij',
				'image'    => '/assets/files/photo-13.png',				
				'user_id'    => 4,
				'created_at' => Carbon\Carbon::now(),
				'updated_at' => Carbon\Carbon::now(),				
		));
        UserDetail::create(array(
				'first_name'   => 'Bogdan',
				'last_name'    => 'Radu',
				'image'    => '/assets/files/photo-14.jpg',				
				'user_id'    => 5,
				'created_at' => Carbon\Carbon::now(),
				'updated_at' => Carbon\Carbon::now(),				
		));
	}

}
