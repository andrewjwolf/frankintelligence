@extends('layouts.scaffold')

@section('main')

<h1>All Swimlines</h1>

<p>{{ link_to_route('swimlines.create', 'Add new swimline') }}</p>

@if ($swimlines->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Name</th>
				<th>Field_id</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($swimlines as $swimline)
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
			@endforeach
		</tbody>
	</table>
@else
	There are no swimlines
@endif

@stop
