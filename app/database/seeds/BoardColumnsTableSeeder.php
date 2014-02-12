<?php

class BoardColumnsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		 DB::table('board_columns')->truncate();

		$board_columns = array(
            ['board_id'  => 1,'column_id'  => 1 ],
            ['board_id'  => 1,'column_id'  => 2 ]
		);

		// Uncomment the below to run the seeder
		 DB::table('board_columns')->insert($board_columns);
	}

}
