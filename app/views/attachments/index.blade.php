@extends('layouts.scaffold')

@section('main')

<h1>All Attachments</h1>

<p>{{ link_to_route('attachments.create', 'Add new attachment') }}</p>

@if ($attachments->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>User_id</th>
				<th>Path</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($attachments as $attachment)
				<tr>
					<td>{{{ $attachment->user_id }}}</td>
					<td>{{{ $attachment->path }}}</td>
                    <td>{{ link_to_route('attachments.edit', 'Edit', array($attachment->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('attachments.destroy', $attachment->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no attachments
@endif

@stop
