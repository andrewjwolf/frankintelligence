<?php

class ProjectFieldsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		 DB::table('project_fields')->truncate();

		$project_fields = array(
            ['project_id'  => 1,'field_id'  => 1],
            ['project_id'  => 1,'field_id'  => 2],
            ['project_id'  => 1,'field_id'  => 3]
		);

		// Uncomment the below to run the seeder
		 DB::table('project_fields')->insert($project_fields);
	}

}
