<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::resource('users','UsersController');

Route::resource('projects', 'ProjectsController');

Route::resource('user_groups', 'User_groupsController');

Route::resource('repositories', 'RepositoriesController');

Route::resource('fieldtypes', 'FieldtypesController');

Route::resource('field_types', 'Field_typesController');

Route::resource('fields', 'FieldsController');

Route::resource('boards', 'BoardsController');

Route::resource('columns', 'ColumnsController');

Route::resource('statuses', 'StatusesController');

Route::resource('priorities', 'PrioritiesController');

Route::resource('tasks', 'TasksController');

Route::resource('comments', 'CommentsController');

Route::resource('attachments', 'AttachmentsController');

Route::resource('swimlines', 'SwimlinesController');

Route::resource('tags', 'TagsController');