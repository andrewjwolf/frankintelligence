@extends('layouts.scaffold')

@section('main')

<h1>Show Repository</h1>

<p>{{ link_to_route('repositories.index', 'Return to all repositories') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Name</th>
				<th>Url</th>
		</tr>
	</thead>

	<tbody>
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
	</tbody>
</table>

@stop
