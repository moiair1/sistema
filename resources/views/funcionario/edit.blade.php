@extends('layouts.admin')

@section('content')
@include('alerts.request')
	{!!Form::model($funcionario,['route'=>['funcionario.update',$funcionario->id], 'method'=>'PUT'])!!}
		@include('funcionario.forms.funcionario')

			{!!Form::submit('Actualizar',['class'=>'btn-primary'])!!}
	{!!Form::close()!!}

	{!!Form::open(['route'=>['funcionario.destroy',$funcionario->id], 'method'=>'DELETE'])!!}
			{!!Form::submit('Eliminar',['class'=>'btn-danger'])!!}
	{!!Form::close()!!}

@stop