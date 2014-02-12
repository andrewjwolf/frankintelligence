<?php

class UserGroupUsersTableSeeder extends Seeder {

	public function run()
	{

		 DB::table('user_group_users')->truncate();

		$user_group_users = array(
            ['user_group_id'  => 1,'user_id'  => 1],
            ['user_group_id'  => 1,'user_id'  => 2],

		);


		 DB::table('user_group_users')->insert($user_group_users);
	}

}
