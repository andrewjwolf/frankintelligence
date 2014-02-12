<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		// $this->call('UserTableSeeder');
		$this->call('ProjectsTableSeeder');
		$this->call('UserGroupsTableSeeder');
		$this->call('RepositoriesTableSeeder');
		$this->call('UsersTableSeeder');
		$this->call('FieldTypesTableSeeder');
		$this->call('FieldsTableSeeder');
		$this->call('BoardsTableSeeder');
		$this->call('ColumnsTableSeeder');
		$this->call('StatusesTableSeeder');
		$this->call('PrioritiesTableSeeder');
		$this->call('TasksTableSeeder');
		$this->call('CommentsTableSeeder');
		$this->call('AttachmentsTableSeeder');
		$this->call('ProjectUserGroupsTableSeeder');
		$this->call('UserGroupUsersTableSeeder');
		$this->call('ProjectFieldsTableSeeder');
		$this->call('BoardColumnsTableSeeder');
		$this->call('SwimlinesTableSeeder');
		$this->call('BoardSwimlinesTableSeeder');
		$this->call('TaskTypesTableSeeder');
		$this->call('TaskCommentsTableSeeder');
		$this->call('TaskAttachmentsTableSeeder');
		$this->call('TagsTableSeeder');
		$this->call('TaskTagsTableSeeder');
	}

}