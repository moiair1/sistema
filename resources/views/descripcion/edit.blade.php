@extends('layouts.admin')

@section('content')
@include('alerts.request')
	{!!Form::model($descripcion,['route'=>['descripcion.update',$descripcion->id], 'method'=>'PUT'])!!}
		@include('descripcion.forms.descripcion')

			{!!Form::submit('Actualizar',['class'=>'btn-primary'])!!}
	{!!Form::close()!!}

	{!!Form::open(['route'=>['descripcion.destroy',$descripcion->id], 'method'=>'DELETE'])!!}
			{!!Form::submit('Eliminar',['class'=>'btn-danger'])!!}
	{!!Form::close()!!}

@stop