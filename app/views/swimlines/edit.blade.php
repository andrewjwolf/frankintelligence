@extends('layouts.scaffold')

@section('main')

<h1>Edit Swimline</h1>
{{ Form::model($swimline, array('method' => 'PATCH', 'route' => array('swimlines.update', $swimline->id))) }}
	<ul>
        <li>
            {{ Form::label('name', 'Name:') }}
            {{ Form::text('name') }}
        </li>

        <li>
            {{ Form::label('field_id', 'Field_id:') }}
            {{ Form::input('number', 'field_id') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('swimlines.show', 'Cancel', $swimline->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
