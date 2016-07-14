@extends('layouts.admin')

@include('alerts.success');

@section('content')
	<table class="table">
		<thead>
			<th>Funcion</th>
			<th>Operaciones</th>
		</thead>
		@foreach($funcions as $funcion)
		<tbody>
			<td>{{$funcion->funcion}}</td>
			<td>{!!link_to_route('funcion.edit', $title = 'editar', $parameters = $funcion->id, $attributes = ['class'=>'btn btn-primary'])!!}</td>
		</tbody>
		@endforeach
	</table>

	{!!$funcions->render()!!}

@stop