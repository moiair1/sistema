$(document).on('click','.pagination a', function(e){
	e.preventDefault();
	var page = $(this).attr('href').split('page=')[1];
	var route = "http://localhost/sistema/public/gastos";

	$.ajax({
		url: route,
		data: {page: page},
		type: 'GET',
		dataType: 'json',
		success: function(data){
			$(".gastos").html(data);
		}
	});
});