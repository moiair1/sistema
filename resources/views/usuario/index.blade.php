@extends('layouts.admin')

@include('alerts.success');

@section('content')
{!! Form::open(['route' => 'gastos.index', 'method' => 'GET', 'class' => 'navbar-form navbar-left pull-right', 'role' => 'search'])!!}
			<div class="form-group">
			{!!Form::text('descripcion', null, ['class' => "form-control", 'placeholder' => 'Search'])!!}
			</div>
			<button type="submit" class="btn btn-default">Buscar</button>
		{!!Form::close()!!}
	<table class="table">
		<thead>
			<th>Nombre</th>
			<th>Correo</th>
			<th>Nivel</th>
			<th>Operaciones</th>
		</thead>
		@foreach($users as $user)
		<tbody>
			<td>{{$user->name}}</td>
			<td>{{$user->email}}</td>
			<td>{{$user->level}}</td>
			<td>{!!link_to_route('usuario.edit', $title = 'editar', $parameters = $user->id, $attributes = ['class'=>'btn btn-primary'])!!}</td>
		</tbody>
		@endforeach
	</table>

	{!!$users->render()!!}

@stop