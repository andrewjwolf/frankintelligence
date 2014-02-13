<?php

class GroupsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		 DB::table('groups')->truncate();

		$groups = array(
            ['name'  => 'group1','description'  => 'an awesome user group1'],
            ['name'  => 'group2','description'  => 'an awesome user group2'],
		);

		// Uncomment the below to run the seeder
		 DB::table('groups')->insert($groups);
	}

}
