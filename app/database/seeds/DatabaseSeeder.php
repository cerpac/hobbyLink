<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('SentryTableSeeder');
		$this->command->info('Sentry tables seeded!');
		
		$this->call('EventsTableSeeder');
		$this->command->info('Events table seeded!');		

		$this->call('HobbiesTableSeeder');
		$this->command->info('Hobby table seeded!');		
	
		$this->call('EventUsersTableSeeder');
		$this->command->info('Event users table seeded!');		

		$this->call('PagesTableSeeder');
		$this->command->info('Pages table seeded!');
		
		$this->call('UserdetailsTableSeeder');
		$this->command->info('UserDetails table seeded!');
		
		$this->call('UserHobbiesTableSeeder');
		$this->command->info('UserHobbiesTableSeeder table seeded!');
		
		$this->call('SettingsTableSeeder');
		$this->command->info('Settings table seeded!');

	}

}