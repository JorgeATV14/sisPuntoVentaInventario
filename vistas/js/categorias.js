/*=============================================
EDITAR CATEGORIA
=============================================*/
$(".tablas").on("click", ".btnEditarCategoria", function(){

	var idCategoria = $(this).attr("idCategoria");

	var datos = new FormData();
	datos.append("idCategoria", idCategoria);

	$.ajax({
		url: "ajax/categorias.ajax.php",
		method: "POST",
      	data: datos,
      	cache: false,
     	contentType: false,
     	processData: false,
     	dataType:"json",
     	success: function(respuesta){

     		$("#editarCategoria").val(respuesta["categoria"]);
     		$("#idCategoria").val(respuesta["id"]);

     	}

	})


})

/*=============================================
ELIMINAR CATEGORIA
=============================================*/
$(".tablas").on("click", ".btnEliminarCategoria", function(){

	 var idCategoriaEliminado = $(this).attr("idCategoriaEliminado");

	 swal({
	 	title: '¿Está seguro de borrar la categoría?',
	 	text: "¡Si no lo está puede cancelar la acción!",
	 	type: 'warning',
	 	showCancelButton: true,
	 	confirmButtonColor: '#3085d6',
	 	cancelButtonColor: '#d33',
	 	cancelButtonText: 'Cancelar',
	 	confirmButtonText: 'Si, borrar categoría!'
	 }).then(function(result){

	 	if(result.value){
			if (result.value == true) {
				swal({
					type: "success",
					title: "La categoría ha sido borrada correctamente",
					showConfirmButton: true,
					confirmButtonText: "Cerrar",
					closeOnConfirm: false
				}).then(function (result) {
					if (result.value) {
						eliminarCategoria(idCategoriaEliminado);
						window.location = "categorias";
					}
				})
			} else {
				console.log('Cancelado');
			}

	 	}

	 })

})


function eliminarCategoria(idCategoriaEliminado) {

	var datos = new FormData();
	datos.append("idCategoriaEliminado", idCategoriaEliminado);
	$.ajax({
		url: "ajax/categorias.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function (respuesta) {

		}
	});

}
