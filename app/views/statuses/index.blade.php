@extends('layouts.scaffold')

@section('main')

<h1>All Statuses</h1>

<p>{{ link_to_route('statuses.create', 'Add new statuse') }}</p>

@if ($statuses->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Name</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($statuses as $statuse)
				<tr>
					<td>{{{ $statuse->name }}}</td>
                    <td>{{ link_to_route('statuses.edit', 'Edit', array($statuse->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('statuses.destroy', $statuse->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no statuses
@endif

@stop
