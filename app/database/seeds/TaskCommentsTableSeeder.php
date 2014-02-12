<?php

class TaskCommentsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		 DB::table('task_comments')->truncate();

		$task_comments = array(
            ['task_id'  => 1,'comment_id'  => 1],
            ['task_id'  => 2,'comment_id'  => 2],
		);

		// Uncomment the below to run the seeder
		 DB::table('task_comments')->insert($task_comments);
	}

}
