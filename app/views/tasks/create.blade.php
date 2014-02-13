@extends('layouts.scaffold')

@section('main')

<h1>Create Task</h1>

{{ Form::open(array('route' => 'tasks.store')) }}
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
			{{ Form::submit('Submit', array('class' => 'btn btn-info')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop


