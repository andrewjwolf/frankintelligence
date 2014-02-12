<?php

class BoardSwimlinesTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		 DB::table('board_swimlines')->truncate();

		$board_swimlines = array(
            ['board_id'  => 1,'swimline_id'  => 1],
            ['board_id'  => 1,'swimline_id'  => 2],
		);

		// Uncomment the below to run the seeder
		 DB::table('board_swimlines')->insert($board_swimlines);
	}

}
