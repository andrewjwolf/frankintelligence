<?php

class TaskAttachmentsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		 DB::table('task_attachments')->truncate();

		$task_attachments = array(
            ['task_id'  => 1,'attachment_id'  => 1],
            ['task_id'  => 1,'attachment_id'  => 2],
		);

		// Uncomment the below to run the seeder
		 DB::table('task_attachments')->insert($task_attachments);
	}

}
