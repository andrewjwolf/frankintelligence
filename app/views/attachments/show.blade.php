@extends('layouts.scaffold')

@section('main')

<h1>Show Attachment</h1>

<p>{{ link_to_route('attachments.index', 'Return to all attachments') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>User_id</th>
				<th>Path</th>
		</tr>
	</thead>

	<tbody>
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
	</tbody>
</table>

@stop
