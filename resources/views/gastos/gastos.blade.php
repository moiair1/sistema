{!!$gastos->render()!!}
		<table class="table">
			<thead>
				<th>Fecha</th>
				<th>Status</th>
				<th>Descripcion</th>
				<th>Funcion</th>
				<th>Naturaleza</th>
				<th>Centro de Costo</th>
				<th>Funcionario</th>
				<th>Valor de Lanzamiento</th>
				<th>Responsable de lanzamiento</th>
				<th>Documento</th>
				<th>Link</th>
				<th>Fecha de Pago</th>
				<th>Ultimo Usuario</th>
				<th>Medio de Pago</th>
				<th>Link2</th>
				<th>Origen</th>
				<th>Valor del Pago</th>
				<th>Total</th>
			</thead>
			@foreach($gastos as $gasto)
				<tbody>
					<td>{{$gasto->creation_date}}</td>
					<td>{{$gasto->status}}</td>
					<td>{{$gasto->descripcion}}</td>
					<td>{{$gasto->funcion}}</td>
					<td>{{$gasto->naturaleza}}</td>
					<td>{{$gasto->centroCosto}}</td>
					<td>{{$gasto->funcionario}}</td>
					<td>{{$gasto->release_value}}</td>
					<td>{{$gasto->name}}</td>
					<td>{{$gasto->documento}}</td>
					<td><a href="{{$gasto->link}}">Link</a></td>
					<td>{{$gasto->pay_date}}</td>
					<td>{{$gasto->name}}</td>
					<td>{{$gasto->medioPago}}</td>
					<td><a href="{{$gasto->link2}}">Link2</td>
					<td>{{$gasto->origen}}</td>
					<td>{{$gasto->payment_value}}</td>
					<td>{{$gasto->total = ($gasto->release_value - $gasto->payment_value)}}</td>


					<td>
						{!!link_to_route('gastos.edit', $title = 'Editar', $parameters = $gasto->id, $attributes = ['class'=>'btn btn-primary'])!!}
					</td>
				</tbody>
			@endforeach
		</table>

		{!!$gastos->render()!!}