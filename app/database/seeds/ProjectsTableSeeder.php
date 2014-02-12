<?php

class ProjectsTableSeeder extends Seeder {

	public function run()
	{

		 DB::table('projects')->truncate();

		$projects = array(
            ['name'  => 'project1','starting_number'  => '1','lead_user_id'  => '1'],
            ['name'  => 'project2','starting_number'  => '1','lead_user_id'  => '1']
		);


		 DB::table('projects')->insert($projects);
	}

}
