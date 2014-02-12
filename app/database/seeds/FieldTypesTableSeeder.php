<?php

class FieldTypesTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		 DB::table('field_types')->truncate();

		$field_types = array(
            ['name'  => 'type1'],
            ['name'  => 'type2'],
		);

		// Uncomment the below to run the seeder
		 DB::table('field_types')->insert($field_types);
	}

}
