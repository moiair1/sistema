@extends('layouts.admin')

@include('alerts.success');

@section('content')
	<table class="table">
		<thead>
			<th>Naturaleza</th>
			<th>Operaciones</th>
		</thead>
		@foreach($naturalezas as $naturaleza)
		<tbody>
			<td>{{$naturaleza->naturaleza}}</td>
			<td>{!!link_to_route('naturaleza.edit', $title = 'editar', $parameters = $naturaleza->id, $attributes = ['class'=>'btn btn-primary'])!!}</td>
		</tbody>
		@endforeach
	</table>

	{!!$naturalezas->render()!!}

@stop