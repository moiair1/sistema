@extends('layouts.admin')

@section('content')
	@include('alerts.request')
	{!!Form::open(['route'=>'naturaleza.store', 'method'=>'POST'])!!}
		@include('naturaleza.forms.naturaleza')

			{!!Form::submit('Registrar',['class'=>'btn-primary'])!!}
	{!!Form::close()!!}


@stop