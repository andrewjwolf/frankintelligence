<?php

class AttachmentsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		 DB::table('attachments')->truncate();

		$attachments = array(
            ['user_id'  => 1, 'path' => 'path/to/file1.jpg'],
            ['user_id'  => 1, 'path' => 'path/to/file2.jpg'],
            ['user_id'  => 1, 'path' => 'path/to/file3.jpg'],
		);

		// Uncomment the below to run the seeder
		 DB::table('attachments')->insert($attachments);
	}

}
