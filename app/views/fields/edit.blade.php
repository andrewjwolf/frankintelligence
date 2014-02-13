@extends('layouts.scaffold')

@section('main')

<h1>Edit Field</h1>
{{ Form::model($field, array('method' => 'PATCH', 'route' => array('fields.update', $field->id))) }}
	<ul>
        <li>
            {{ Form::label('field_type_id', 'Field_type_id:') }}
            {{ Form::input('number', 'field_type_id') }}
        </li>

        <li>
            {{ Form::label('can_be_empty', 'Can_be_empty:') }}
            {{ Form::checkbox('can_be_empty') }}
        </li>

        <li>
            {{ Form::label('default_value', 'Default_value:') }}
            {{ Form::text('default_value') }}
        </li>

        <li>
            {{ Form::label('empty_value', 'Empty_value:') }}
            {{ Form::text('empty_value') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('fields.show', 'Cancel', $field->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
