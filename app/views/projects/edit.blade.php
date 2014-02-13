@extends('layouts.scaffold')

@section('main')

<h1>Edit Project</h1>
{{ Form::model($project, array('method' => 'PATCH', 'route' => array('projects.update', $project->id))) }}
	<ul>
        <li>
            {{ Form::label('name', 'Name:') }}
            {{ Form::text('name') }}
        </li>

        <li>
            {{ Form::label('start_number', 'Start_number:') }}
            {{ Form::input('number', 'start_number') }}
        </li>

        <li>
            {{ Form::label('lead_user_id', 'Lead_user_id:') }}
            {{ Form::text('lead_user_id') }}
        </li>

        <li>
            {{ Form::label('repository_id', 'Repository_id:') }}
            {{ Form::text('repository_id') }}
        </li>

        <li>
            {{ Form::label('description', 'Description:') }}
            {{ Form::textarea('description') }}
        </li>

        <li>
            {{ Form::label('from_email', 'From_email:') }}
            {{ Form::text('from_email') }}
        </li>

        <li>
            {{ Form::label('has_time_tracking', 'Has_time_tracking:') }}
            {{ Form::checkbox('has_time_tracking') }}
        </li>

        <li>
            {{ Form::label('has_estimate', 'Has_estimate:') }}
            {{ Form::checkbox('has_estimate') }}
        </li>

        <li>
            {{ Form::label('estimate_field_id', 'Estimate_field_id:') }}
            {{ Form::text('estimate_field_id') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('projects.show', 'Cancel', $project->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
