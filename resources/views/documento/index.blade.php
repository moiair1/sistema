@extends('layouts.admin')

@include('alerts.success');

@section('content')
	<table class="table">
		<thead>
			<th>Documento</th>
			<th>Operaciones</th>
		</thead>
		@foreach($documentos as $documento)
		<tbody>
			<td>{{$documento->documento}}</td>
			<td>{!!link_to_route('documento.edit', $title = 'editar', $parameters = $documento->id, $attributes = ['class'=>'btn btn-primary'])!!}</td>
		</tbody>
		@endforeach
	</table>

	{!!$documentos->render()!!}

@stop