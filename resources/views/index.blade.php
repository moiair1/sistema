@extends('layouts.principal')

@section('content')

	@include('alerts.errors')
	@include('alerts.request')
			<div class="header">
			<div class="top-header">
				<div class="logo">
					<a href="{!!URL::to('/')!!}"><p>Administracion</p></a>
					
				</div>
				
				<div class="clearfix"></div>
			</div>
			
			<div class="header-info">
				<h1>Login</h1>
				{!!Form::open(['route'=>'log.store', 'method'=> 'POST'])!!}
				<div class="form-group">
					{!!Form::label('correo','Correo')!!}
					{!!Form::email('email',null,['class' => 'form-control','placeholder' => 'Ingresa tu correo'])!!}
				</div>
				<div class="form-group">
					{!!Form::label('contrasena','Contraseña')!!}
					{!!Form::password('password',['class' => 'form-control','placeholder' => 'Ingresa tu contraseña'])!!}
				</div>
					{!!Form::submit('Iniciar',['class' => 'btn btn-primary'])!!}
					{!!Form::close()!!}
					{!!link_to('/contacto', $title = 'Registrarse', $attributes = null, $secure = null)!!}
					{!!Form::label('|')!!}
					{!!link_to('password/email', $title = 'Olvidaste tu contraseña??', $attributes = null, $secure = null)!!}

			</div>
		</div>
		
@stop