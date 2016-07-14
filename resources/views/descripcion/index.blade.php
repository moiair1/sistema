@extends('layouts.admin')

@include('alerts.success');

@section('content')
	<table class="table">
		<thead>
			<th>Descripcion</th>
			<th>Operaciones</th>
		</thead>
		@foreach($descripcions as $descripcion)
		<tbody>
			<td>{{$descripcion->descripcion}}</td>
			<td>{!!link_to_route('descripcion.edit', $title = 'editar', $parameters = $descripcion->id, $attributes = ['class'=>'btn btn-primary'])!!}</td>
		</tbody>
		@endforeach
	</table>

	{!!$descripcions->render()!!}

@stop