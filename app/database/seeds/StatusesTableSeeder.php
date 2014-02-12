<?php

class StatusesTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		 DB::table('statuses')->truncate();

		$statuses = array(
            ['name'  => 'status 1'],
            ['name'  => 'status 2'],
		);

		// Uncomment the below to run the seeder
		 DB::table('statuses')->insert($statuses);
	}

}
