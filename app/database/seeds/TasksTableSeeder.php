<?php

class TasksTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		 DB::table('tasks')->truncate();

		$tasks = array(
            ['title'  => 'Task 1', 'description' => 'Description of Task 1', 'project_id' => 1],
            ['title'  => 'Task 2', 'description' => 'Description of Task 2', 'project_id' => 1],
            ['title'  => 'Task 3', 'description' => 'Description of Task 3', 'project_id' => 2],
            ['title'  => 'Task 4', 'description' => 'Description of Task 4', 'project_id' => 2],
		);

		// Uncomment the below to run the seeder
		 DB::table('tasks')->insert($tasks);
	}

}
