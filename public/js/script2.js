$(document).ready(function(){
	Carga();
});

function Carga(){
	var tablaDatos = $("#datos");
	var route = "http://localhost/sistema/public/descripcions";

	$("#datos").empty();

$.get(route, function(res){
		$(res).each(function(key,value){
			tablaDatos.append("<tr><td>"+value.descripcion+"</td><td><button value="+ value.id+" OnClick='Mostrar(this);'class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Editar</button><button class='btn btn-danger'>Eliminar</button></td></tr>");
		});
	});
}

function Mostrar(btn){
	var route = "http://localhost/sistema/public/descripcion/"+btn.value+"/edit";

	$.get(route, function(res){
		$("#descripcion").val(res.descripcion);
		$("#id").val(res.id);
	});
}

$("#actualizar").click(function(){
	var value = $("#id").val();
	var dato = $("#descripcion").val();
	var route = "http://localhost/sistema/public/descripcion/"+value+"";
	var token = $("#token").val();

	$.ajax({
		url : route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'PUT',
		dataType: 'json',
		data: {descripcion: dato},
		success: function(){
			Carga();
			$("#myModal").modal('toggle');
			$("#msj-success").fadeIn();
		}
	});
});