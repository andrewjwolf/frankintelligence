@extends('layouts.scaffold')

@section('main')

<h1>Create Field</h1>

{{ Form::open(array('route' => 'fields.store')) }}
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


