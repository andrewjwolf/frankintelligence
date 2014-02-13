@extends('layouts.scaffold')

@section('main')

<h1>Edit Attachment</h1>
{{ Form::model($attachment, array('method' => 'PATCH', 'route' => array('attachments.update', $attachment->id))) }}
	<ul>
        <li>
            {{ Form::label('user_id', 'User_id:') }}
            {{ Form::input('number', 'user_id') }}
        </li>

        <li>
            {{ Form::label('path', 'Path:') }}
            {{ Form::text('path') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('attachments.show', 'Cancel', $attachment->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
