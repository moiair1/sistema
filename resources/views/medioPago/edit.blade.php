@extends('layouts.admin')

@section('content')
@include('alerts.request')
	{!!Form::model($medioPago,['route'=>['medioPago.update',$medioPago->id], 'method'=>'PUT'])!!}
		@include('medioPago.forms.medioPago')

			{!!Form::submit('Actualizar',['class'=>'btn-primary'])!!}
	{!!Form::close()!!}

	{!!Form::open(['route'=>['medioPago.destroy',$medioPago->id], 'method'=>'DELETE'])!!}
			{!!Form::submit('Eliminar',['class'=>'btn-danger'])!!}
	{!!Form::close()!!}

@stop