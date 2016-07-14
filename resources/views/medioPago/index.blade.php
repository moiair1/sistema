@extends('layouts.admin')

@include('alerts.success');

@section('content')
	<table class="table">
		<thead>
			<th>MedioPago</th>
			<th>Operaciones</th>
		</thead>
		@foreach($medioPagos as $medioPago)
		<tbody>
			<td>{{$medioPago->medioPago}}</td>
			<td>{!!link_to_route('medioPago.edit', $title = 'editar', $parameters = $medioPago->id, $attributes = ['class'=>'btn btn-primary'])!!}</td>
		</tbody>
		@endforeach
	</table>

	{!!$medioPagos->render()!!}

@stop