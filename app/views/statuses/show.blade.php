@extends('layouts.scaffold')

@section('main')

<h1>Show Status</h1>

<p>{{ link_to_route('statuses.index', 'Return to all statuses') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Name</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $statuse->name }}}</td>
                    <td>{{ link_to_route('statuses.edit', 'Edit', array($statuse->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('statuses.destroy', $statuse->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
