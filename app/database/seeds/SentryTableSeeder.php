<?php 

use App\Models\User;

class SentryTableSeeder extends Seeder {

	public function run()
	{
		DB::table('users')->delete();
        DB::table('groups')->delete();
        DB::table('users_groups')->delete();
 
        Sentry::getUserProvider()->create(array(
            'email'       => 'admin@hobbylink.com',
            'password'    => "123456",
            'first_name'  => 'Admin',
            'last_name'   => ' ',
            'activated'   => 1,
        ));
        Sentry::getUserProvider()->create(array(
            'email'       => 'traian.cazacu@gmail.com',
            'password'    => "123456",
            'first_name'  => 'Traian',
            'last_name'   => 'Cazacu',
            'activated'   => 1,
        ));
        Sentry::getUserProvider()->create(array(
            'email'       => 'florian.cazacu@gmail.com',
            'password'    => "123456",
            'first_name'  => 'Florian',
            'last_name'   => 'Cazacu',
            'activated'   => 1,
        ));
        Sentry::getUserProvider()->create(array(
            'email'       => 'andrei.tij@gmail.com',
            'password'    => "123456",
            'first_name'  => 'Andrei',
            'last_name'   => 'Tij',
            'activated'   => 1,
        ));

        Sentry::getUserProvider()->create(array(
            'email'       => 'bogdan.radu@gmail.com',
            'password'    => "123456",
            'first_name'  => 'Bogdan',
            'last_name'   => 'Radu',
            'activated'   => 1,
        ));
 
        Sentry::getGroupProvider()->create(array(
            'name'        => 'Admin',
            'permissions' => array('admin' => 1),
        ));
		Sentry::getGroupProvider()->create(array(
			'name'        => 'Member',
			'permissions' => array(
				'user.create' => 1,
				'user.profile' => 1,
			),
		));

        // Assign user permissions
        $user  = Sentry::getUserProvider()->findByLogin('admin@hobbylink.com');
        $group = Sentry::getGroupProvider()->findByName('Admin');
        $user->addGroup($group);
		
        $group = Sentry::getGroupProvider()->findByName('Member');

		
        $user  = Sentry::getUserProvider()->findByLogin('traian.cazacu@gmail.com');
        $user->addGroup($group);
        $user  = Sentry::getUserProvider()->findByLogin('florian.cazacu@gmail.com');
        $user->addGroup($group);
        $user  = Sentry::getUserProvider()->findByLogin('andrei.tij@gmail.com');
        $user->addGroup($group);
        $user  = Sentry::getUserProvider()->findByLogin('bogdan.radu@gmail.com');
        $user->addGroup($group);
	}
}
