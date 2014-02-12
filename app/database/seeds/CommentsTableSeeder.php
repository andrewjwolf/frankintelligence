<?php

class CommentsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		 DB::table('comments')->truncate();

		$comments = array(
            ['user_id'  => 1, 'content' => 'Comment Body for Comment 1'],
            ['user_id'  => 1, 'content' => 'Comment Body for Comment 2'],
            ['user_id'  => 1, 'content' => 'Comment Body for Comment 3'],
		);

		// Uncomment the below to run the seeder
		 DB::table('comments')->insert($comments);
	}

}
