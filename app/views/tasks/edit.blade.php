@extends('layouts.scaffold')

@section('main')

<h1>Edit Task</h1>
{{ Form::model($task, array('method' => 'PATCH', 'route' => array('tasks.update', $task->id))) }}
	<ul>
        <li>
            {{ Form::label('title', 'Title:') }}
            {{ Form::text('title') }}
        </li>

        <li>
            {{ Form::label('description', 'Description:') }}
            {{ Form::textarea('description') }}
        </li>

        <li>
            {{ Form::label('project_id', 'Project_id:') }}
            {{ Form::input('number', 'project_id') }}
        </li>

        <li>
            {{ Form::label('field_type_id', 'Field_type_id:') }}
            {{ Form::input('number', 'field_type_id') }}
        </li>

        <li>
            {{ Form::label('priority_id', 'Priority_id:') }}
            {{ Form::input('number', 'priority_id') }}
        </li>

        <li>
            {{ Form::label('status_id', 'Status_id:') }}
            {{ Form::input('number', 'status_id') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('tasks.show', 'Cancel', $task->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
