$("#registro").click(function(){
	var dato = $("#descripcion").val();
	var route = "http://localhost/sistema/public/descripcion";
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'POST',
		dataType: 'json',
		data:{descripcion: dato},

		success:function(){
			$("#msj-success").fadeIn();
		}
	});
});