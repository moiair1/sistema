@extends('layouts.admin')

@section('content')
@include('alerts.request')
	{!!Form::model($origen,['route'=>['origen.update',$origen->id], 'method'=>'PUT'])!!}
		@include('origen.forms.origen')

			{!!Form::submit('Actualizar',['class'=>'btn-primary'])!!}
	{!!Form::close()!!}

	{!!Form::open(['route'=>['origen.destroy',$origen->id], 'method'=>'DELETE'])!!}
			{!!Form::submit('Eliminar',['class'=>'btn-danger'])!!}
	{!!Form::close()!!}

@stop