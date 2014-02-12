<?php

class ColumnsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		 DB::table('columns')->truncate();

		$columns = array(
            ['name'  => 'column 1'],
            ['name'  => 'column 2'],
            ['name'  => 'column 3']
		);

		// Uncomment the below to run the seeder
		 DB::table('columns')->insert($columns);
	}

}
