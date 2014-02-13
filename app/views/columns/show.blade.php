@extends('layouts.scaffold')

@section('main')

<h1>Show Column</h1>

<p>{{ link_to_route('columns.index', 'Return to all columns') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Name</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $column->name }}}</td>
                    <td>{{ link_to_route('columns.edit', 'Edit', array($column->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('columns.destroy', $column->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
