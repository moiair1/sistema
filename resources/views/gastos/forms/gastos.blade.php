<div class="form-group">
	{!!Form::label('FechaCreacion','Fecha de Creacion:')!!}
	{!!Form::text('creation_date',null,['class'=>'form-control', 'placeholder'=>'Ingresa el Nombre de la pelicula'])!!}
</div>

<div class="form-group">
	{!!Form::label('status','Status:')!!}
	{!!Form::text('status',null,['class'=>'form-control', 'placeholder'=>'Ingresa el Nombre de la pelicula'])!!}
</div>

<div class="form-group">
	{!!Form::label('Descripcion','Descripcion:')!!}
	{!!Form::select('description_id',$descripcions)!!}
</div>

<div class="form-group">
	{!!Form::label('Funcion','Funcion:')!!}
	{!!Form::select('function_id',$funcions)!!}
</div>

<div class="form-group">
	{!!Form::label('Naturaleza','Naturaleza:')!!}
	{!!Form::select('nature_id',$naturalezas)!!}
</div>

<div class="form-group">
	{!!Form::label('CentroCosto','Centro de Costo:')!!}
	{!!Form::select('cost_center_id',$centro_Costos)!!}
</div>

<div class="form-group">
	{!!Form::label('Funcionario','funcionario:')!!}
	{!!Form::select('official_id',$funcionarios)!!}
</div>

<div class="form-group">
	{!!Form::label('ValorInicial','Valor Inicial:')!!}
	{!!Form::text('release_value',null,['class'=>'form-control', 'placeholder'=>'Ingresa el Nombre de la pelicula'])!!}
</div>

<div class="form-group">
	{!!Form::label('Creador','Creador:')!!}
	{!!Form::select('creator_id',$users)!!}
</div>

<div class="form-group">
	{!!Form::label('Documento','Documento:')!!}
	{!!Form::select('document_id',$documents)!!}
</div>

<div class="form-group">
	{!!Form::label('Link','Link:')!!}
	{!!Form::text('link',null,['class'=>'form-control', 'placeholder'=>'Ingresa el Nombre de la pelicula'])!!}
</div>

<div class="form-group">
	{!!Form::label('FechaPago','Fecha de Pago:')!!}
	{!!Form::text('status',null,['class'=>'form-control', 'placeholder'=>'Ingresa el Nombre de la pelicula'])!!}
</div>

<div class="form-group">
	{!!Form::label('ResponsablePago','Responsble de Pago:')!!}
	{!!Form::select('editor_id',$users)!!}
</div>

<div class="form-group">
	{!!Form::label('MedioPago','Medio de Pago:')!!}
	{!!Form::select('payment_method_id',$medio_Pagos)!!}
</div>

<div class="form-group">
	{!!Form::label('Link2','Link2:')!!}
	{!!Form::text('link2',null,['class'=>'form-control', 'placeholder'=>'Ingresa el Nombre de la pelicula'])!!}
</div>

<div class="form-group">
	{!!Form::label('Origen','Origen:')!!}
	{!!Form::select('origin_id',$origens)!!}
</div>

<div class="form-group">
	{!!Form::label('ValorPago','Valor de Pago:')!!}
	{!!Form::text('payment_value',null,['class'=>'form-control', 'placeholder'=>'Ingresa el Nombre de la pelicula'])!!}
</div>

<div class="form-group">
	{!!Form::label('Total','Total:')!!}
	{!!Form::text('total',null,['class'=>'form-control', 'placeholder'=>'Ingresa el Nombre de la pelicula'])!!}
</div>
