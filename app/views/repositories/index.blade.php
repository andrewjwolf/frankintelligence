@extends('layouts.scaffold')

@section('main')

<h1>All Repositories</h1>

<p>{{ link_to_route('repositories.create', 'Add new repositorie') }}</p>

@if ($repositories->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Name</th>
				<th>Url</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($repositories as $repositorie)
				<tr>
					<td>{{{ $repositorie->name }}}</td>
					<td>{{{ $repositorie->url }}}</td>
                    <td>{{ link_to_route('repositories.edit', 'Edit', array($repositorie->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('repositories.destroy', $repositorie->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no repositories
@endif

@stop
