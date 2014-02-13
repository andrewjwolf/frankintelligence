@extends('layouts.scaffold')

@section('main')

<h1>All Projects</h1>

<p>{{ link_to_route('projects.create', 'Add new project') }}</p>

@if ($projects->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Name</th>
				<th>Start_number</th>
				<th>Lead_user_id</th>
				<th>Repository_id</th>
				<th>Description</th>
				<th>From_email</th>
				<th>Has_time_tracking</th>
				<th>Has_estimate</th>
				<th>Estimate_field_id</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($projects as $project)
				<tr>
					<td>{{{ $project->name }}}</td>
					<td>{{{ $project->start_number }}}</td>
					<td>{{{ $project->lead_user_id }}}</td>
					<td>{{{ $project->repository_id }}}</td>
					<td>{{{ $project->description }}}</td>
					<td>{{{ $project->from_email }}}</td>
					<td>{{{ $project->has_time_tracking }}}</td>
					<td>{{{ $project->has_estimate }}}</td>
					<td>{{{ $project->estimate_field_id }}}</td>
                    <td>{{ link_to_route('projects.edit', 'Edit', array($project->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('projects.destroy', $project->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no projects
@endif

@stop
