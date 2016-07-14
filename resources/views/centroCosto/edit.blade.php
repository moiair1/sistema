@extends('layouts.admin')

@section('content')
@include('alerts.request')
	{!!Form::model($centroCosto,['route'=>['centroCosto.update',$centroCosto->id], 'method'=>'PUT'])!!}
		@include('centroCosto.forms.centroCosto')

			{!!Form::submit('Actualizar',['class'=>'btn-primary'])!!}
	{!!Form::close()!!}

	{!!Form::open(['route'=>['centroCosto.destroy',$centroCosto->id], 'method'=>'DELETE'])!!}
			{!!Form::submit('Eliminar',['class'=>'btn-danger'])!!}
	{!!Form::close()!!}

@stop