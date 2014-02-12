<?php

class PrioritiesTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		 DB::table('priorities')->truncate();

		$priorities = array(
            ['name'  => 'priority 1'],
            ['name'  => 'priority 2'],
            ['name'  => 'priority 3']
		);

		// Uncomment the below to run the seeder
		 DB::table('priorities')->insert($priorities);
	}

}
