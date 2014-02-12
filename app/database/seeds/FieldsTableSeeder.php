<?php

class FieldsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		 DB::table('fields')->truncate();

		$fields = array(
            ['name'  => 'field1','field_type_id'  => '1'],
            ['name'  => 'field2','field_type_id'  => '1'],
            ['name'  => 'field3','field_type_id'  => '1'],
            ['name'  => 'field4','field_type_id'  => '1']
		);

		// Uncomment the below to run the seeder
		 DB::table('fields')->insert($fields);
	}

}
