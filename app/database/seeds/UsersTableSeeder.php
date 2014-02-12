<?php

class UsersTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		 DB::table('users')->truncate();

		$users = array(
            ['username'  => 'user1','email'  => 'user1@website.com', 'password' => Hash::make('password'), 'firstname' => 'user', 'lastname' => 'one'],
            ['username'  => 'user2','email'  => 'user2@website.com', 'password' => Hash::make('password'), 'firstname' => 'user', 'lastname' => 'two'],
		);

		// Uncomment the below to run the seeder
		 DB::table('users')->insert($users);
	}

}
