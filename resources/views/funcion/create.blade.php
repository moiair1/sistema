@extends('layouts.admin')

@section('content')
	@include('alerts.request')
	{!!Form::open(['route'=>'funcion.store', 'method'=>'POST'])!!}
		@include('funcion.forms.funcion')

			{!!Form::submit('Registrar',['class'=>'btn-primary'])!!}
	{!!Form::close()!!}


@stop