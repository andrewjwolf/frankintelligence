@extends('layouts.scaffold')

@section('main')

<h1>All Columns</h1>

<p>{{ link_to_route('columns.create', 'Add new column') }}</p>

@if ($columns->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Name</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($columns as $column)
				<tr>
					<td>{{{ $column->name }}}</td>
                    <td>{{ link_to_route('columns.edit', 'Edit', array($column->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('columns.destroy', $column->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no columns
@endif

@stop
