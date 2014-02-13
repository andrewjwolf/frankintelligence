@extends('layouts.scaffold')

@section('main')

<h1>Show Field</h1>

<p>{{ link_to_route('fields.index', 'Return to all fields') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Field_type_id</th>
				<th>Can_be_empty</th>
				<th>Default_value</th>
				<th>Empty_value</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $field->field_type_id }}}</td>
					<td>{{{ $field->can_be_empty }}}</td>
					<td>{{{ $field->default_value }}}</td>
					<td>{{{ $field->empty_value }}}</td>
                    <td>{{ link_to_route('fields.edit', 'Edit', array($field->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('fields.destroy', $field->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
