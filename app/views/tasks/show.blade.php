@extends('layouts.scaffold')

@section('main')

<h1>Show Task</h1>

<p>{{ link_to_route('tasks.index', 'Return to all tasks') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Title</th>
				<th>Description</th>
				<th>Project_id</th>
				<th>Field_type_id</th>
				<th>Priority_id</th>
				<th>Status_id</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $task->title }}}</td>
					<td>{{{ $task->description }}}</td>
					<td>{{{ $task->project_id }}}</td>
					<td>{{{ $task->field_type_id }}}</td>
					<td>{{{ $task->priority_id }}}</td>
					<td>{{{ $task->status_id }}}</td>
                    <td>{{ link_to_route('tasks.edit', 'Edit', array($task->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('tasks.destroy', $task->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
