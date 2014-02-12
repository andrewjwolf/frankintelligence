<?php

class RepositoriesTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		 DB::table('repositories')->truncate();

		$repositories = array(
            ['name'  => 'repository1','url'  => 'https://www.path.to/repo'],
            ['name'  => 'repository2','url'  => 'https://www.path.to/repo2']
		);

		// Uncomment the below to run the seeder
		 DB::table('repositories')->insert($repositories);
	}

}
