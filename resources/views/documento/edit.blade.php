@extends('layouts.admin')

@section('content')
@include('alerts.request')
	{!!Form::model($documento,['route'=>['documento.update',$documento->id], 'method'=>'PUT'])!!}
		@include('documento.forms.documento')

			{!!Form::submit('Actualizar',['class'=>'btn-primary'])!!}
	{!!Form::close()!!}

	{!!Form::open(['route'=>['documento.destroy',$documento->id], 'method'=>'DELETE'])!!}
			{!!Form::submit('Eliminar',['class'=>'btn-danger'])!!}
	{!!Form::close()!!}

@stop