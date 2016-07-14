@extends('layouts.principal')
	@section('content')
	@include('alerts.success')
		<div class="contact-content">
			<div class="top-header span_top">
				<div class="logo">
					<a href="{!!URL::to('/')!!}"><p>Administracion</p></a>
					
				</div>
				
				<div class="clearfix"></div>
			</div>
			<!---contact-->
<div class="main-contact">
		 <h3 class="head">CONTACT</h3>
		 <p>WE'RE ALWAYS HERE TO HELP YOU</p>
		 <div class="contact-form">
			 {!!Form::open(['route'=>'mail.store','method'=>'POST'])!!}
					 	<div class="col-md-6 contact-left">


							{!!Form::label('Nombre:')!!}
							{!!Form::text('name',null,['class'=>'form-control', 'placeholder'=>'Ingrese el Nombre del usuario'])!!}

							{!!Form::label('Correo:')!!}
							{!!Form::text('email',null,['class'=>'form-control', 'placeholder'=>'Ingrese el Correo del usuario'])!!}

							{!!Form::label('Contraseña:')!!}
							{!!Form::password('password',['class'=>'form-control', 'placeholder'=>'Ingrese Contraseña'])!!}
						
						{!!Form::submit('SEND')!!}
						</div>
						
					 {!!Form::close()!!}
	     </div>
	 </div>
</div>
	@endsection	