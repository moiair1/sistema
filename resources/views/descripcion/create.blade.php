@extends('layouts.admin')

@section('content')
	@include('alerts.request')
	{!!Form::open(['route'=>'descripcion.store', 'method'=>'POST'])!!}
		@include('descripcion.forms.descripcion')

			{!!Form::submit('Registrar',['class'=>'btn-primary'])!!}
	{!!Form::close()!!}


@stop