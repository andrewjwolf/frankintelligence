<?php

class TaskTypesTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		 DB::table('task_types')->truncate();

		$task_types = array(
            ['name'  => 'task type 1'],
            ['name'  => 'task type 2'],
            ['name'  => 'task type 3'],
            ['name'  => 'task type 4'],
		);

		// Uncomment the below to run the seeder
		 DB::table('task_types')->insert($task_types);
	}

}
