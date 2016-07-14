@extends('layouts.admin')

@section('content')
	@include('alerts.request')
	{!!Form::open(['route'=>'medioPago.store', 'method'=>'POST'])!!}
		@include('medioPago.forms.medioPago')

			{!!Form::submit('Registrar',['class'=>'btn-primary'])!!}
	{!!Form::close()!!}


@stop