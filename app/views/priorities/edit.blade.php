@extends('layouts.scaffold')

@section('main')

<h1>Edit Priority</h1>
{{ Form::model($prioritie, array('method' => 'PATCH', 'route' => array('priorities.update', $prioritie->id))) }}
	<ul>
        <li>
            {{ Form::label('name', 'Name:') }}
            {{ Form::text('name') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('priorities.show', 'Cancel', $prioritie->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
