<?php

class SwimlinesTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		 DB::table('swimlines')->truncate();

		$swimlines = array(
            ['name'  => 'swimline 1', 'field_id' => 1],
            ['name'  => 'swimline 2', 'field_id' => 1],
            ['name'  => 'swimline 3', 'field_id' => 1],
            ['name'  => 'swimline 4', 'field_id' => 1]
		);

		// Uncomment the below to run the seeder
		 DB::table('swimlines')->insert($swimlines);
	}

}
