@extends('layouts.admin')
	@section('content')
		@include('alerts.request')
		
		{!!Form::model($gasto,['route'=> ['gastos.update',$gasto->id],'method'=>'PUT','files' => true])!!}
			@include('gastos.forms.gastos')
			{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
		{!!Form::close()!!}

		{!!Form::open(['route'=> ['gastos.destroy',$gasto->id],'method'=>'DELETE'])!!}
			{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
		{!!Form::close()!!}
	@endsection