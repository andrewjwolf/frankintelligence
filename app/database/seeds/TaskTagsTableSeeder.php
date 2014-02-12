<?php

class TaskTagsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		 DB::table('task_tags')->truncate();

		$task_tags = array(
            ['task_id'  => 1,'tag_id'  => 1],
            ['task_id'  => 2,'tag_id'  => 2],
            ['task_id'  => 2,'tag_id'  => 3],
		);

		// Uncomment the below to run the seeder
		 DB::table('task_tags')->insert($task_tags);
	}

}
