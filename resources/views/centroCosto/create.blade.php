@extends('layouts.admin')

@section('content')
	@include('alerts.request')
	{!!Form::open(['route'=>'centroCosto.store', 'method'=>'POST'])!!}
		@include('centroCosto.forms.centroCosto')

			{!!Form::submit('Registrar',['class'=>'btn-primary'])!!}
	{!!Form::close()!!}


@stop