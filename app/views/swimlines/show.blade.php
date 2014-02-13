@extends('layouts.scaffold')

@section('main')

<h1>Show Swimline</h1>

<p>{{ link_to_route('swimlines.index', 'Return to all swimlines') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Name</th>
				<th>Field_id</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $swimline->name }}}</td>
					<td>{{{ $swimline->field_id }}}</td>
                    <td>{{ link_to_route('swimlines.edit', 'Edit', array($swimline->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('swimlines.destroy', $swimline->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
