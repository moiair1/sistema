@extends('layouts.admin')
	@section('content')
		@include('alerts.request')
			{!!Form::open(['route'=>'gastos.store', 'method'=>'POST'])!!}
				@include('gastos.forms.gastos')
				{!!Form::submit('Registrar',['Class'=>'btn btn-primary'])!!}
			{!!Form::close()!!}
	@endsection