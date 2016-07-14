@extends('layouts.admin')

@section('content')
@include('alerts.request')
	{!!Form::model($funcion,['route'=>['funcion.update',$funcion->id], 'method'=>'PUT'])!!}
		@include('funcion.forms.funcion')

			{!!Form::submit('Actualizar',['class'=>'btn-primary'])!!}
	{!!Form::close()!!}

	{!!Form::open(['route'=>['funcion.destroy',$funcion->id], 'method'=>'DELETE'])!!}
			{!!Form::submit('Eliminar',['class'=>'btn-danger'])!!}
	{!!Form::close()!!}

@stop