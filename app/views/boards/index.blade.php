@extends('layouts.scaffold')

@section('main')

<h1>All Boards</h1>

<p>{{ link_to_route('boards.create', 'Add new board') }}</p>

@if ($boards->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Project_id</th>
				<th>Name</th>
				<th>Description</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($boards as $board)
				<tr>
					<td>{{{ $board->project_id }}}</td>
					<td>{{{ $board->name }}}</td>
					<td>{{{ $board->description }}}</td>
                    <td>{{ link_to_route('boards.edit', 'Edit', array($board->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('boards.destroy', $board->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no boards
@endif

@stop
