<?php

class BoardsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		 DB::table('boards')->truncate();

		$boards = array(
            ['project_id'  => '1','name'  => 'project 1 board 1', 'description' => 'description for board 1'],
            ['project_id'  => '1','name'  => 'project 1board 2', 'description' => 'description for board 2'],
            ['project_id'  => '2','name'  => 'project 2 board 1', 'description' => 'description for project 1 board 1'],
            ['project_id'  => '2','name'  => 'project 2 board 2', 'description' => 'description for project 1 board 2']
		);

		// Uncomment the below to run the seeder
		 DB::table('boards')->insert($boards);
	}

}
