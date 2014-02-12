<?php

class ProjectUserGroupsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		 DB::table('project_user_groups')->truncate();

		$project_user_groups = array(
            ['project_id'  => 1,'user_group_id'  => 1],
            ['project_id'  => 2,'user_group_id'  => 2]
		);

		// Uncomment the below to run the seeder
		 DB::table('project_user_groups')->insert($project_user_groups);
	}

}
