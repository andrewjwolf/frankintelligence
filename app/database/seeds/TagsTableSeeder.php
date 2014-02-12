<?php

class TagsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		 DB::table('tags')->truncate();

		$tags = array(
            ['name'  => 'tag 1'],
            ['name'  => 'tag 2'],
            ['name'  => 'tag 3'],
            ['name'  => 'tag 4'],
            ['name'  => 'tag 5'],
            ['name'  => 'tag 6'],
		);

		// Uncomment the below to run the seeder
		 DB::table('tags')->insert($tags);
	}

}
