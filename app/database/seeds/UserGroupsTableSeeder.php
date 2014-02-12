<?php

class UserGroupsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		 DB::table('user_groups')->truncate();

		$user_groups = array(
            ['name'  => 'group1','description'  => 'an awesome user group1'],
            ['name'  => 'group2','description'  => 'an awesome user group2'],
		);

		// Uncomment the below to run the seeder
		 DB::table('user_groups')->insert($user_groups);
	}

}
