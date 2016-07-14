@extends('layouts.admin')

@include('alerts.success');

@section('content')
	<table class="table">
		<thead>
			<th>Funcionario</th>
			<th>Operaciones</th>
		</thead>
		@foreach($funcionarios as $funcionario)
		<tbody>
			<td>{{$funcionario->funcionario}}</td>
			<td>{!!link_to_route('funcionario.edit', $title = 'editar', $parameters = $funcionario->id, $attributes = ['class'=>'btn btn-primary'])!!}</td>
		</tbody>
		@endforeach
	</table>

	{!!$funcionarios->render()!!}

@stop