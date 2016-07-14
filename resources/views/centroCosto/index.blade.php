@extends('layouts.admin')

@include('alerts.success');

@section('content')
	<table class="table">
		<thead>
			<th>CentroCosto</th>
			<th>Operaciones</th>
		</thead>
		@foreach($centroCostos as $centroCosto)
		<tbody>
			<td>{{$centroCosto->centroCosto}}</td>
			<td>{!!link_to_route('centroCosto.edit', $title = 'editar', $parameters = $centroCosto->id, $attributes = ['class'=>'btn btn-primary'])!!}</td>
		</tbody>
		@endforeach
	</table>

	{!!$centroCostos->render()!!}

@stop