@extends('layouts.admin')

@include('alerts.success');

@section('content')
	<table class="table">
		<thead>
			<th>Origen</th>
			<th>Operaciones</th>
		</thead>
		@foreach($origens as $origen)
		<tbody>
			<td>{{$origen->origen}}</td>
			<td>{!!link_to_route('origen.edit', $title = 'editar', $parameters = $origen->id, $attributes = ['class'=>'btn btn-primary'])!!}</td>
		</tbody>
		@endforeach
	</table>

	{!!$origens->render()!!}

@stop