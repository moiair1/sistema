@extends('layouts.admin')

@section('content')
@include('alerts.request')
	{!!Form::model($naturaleza,['route'=>['naturaleza.update',$naturaleza->id], 'method'=>'PUT'])!!}
		@include('naturaleza.forms.naturaleza')

			{!!Form::submit('Actualizar',['class'=>'btn-primary'])!!}
	{!!Form::close()!!}

	{!!Form::open(['route'=>['naturaleza.destroy',$naturaleza->id], 'method'=>'DELETE'])!!}
			{!!Form::submit('Eliminar',['class'=>'btn-danger'])!!}
	{!!Form::close()!!}

@stop