/*=============================================
EDITAR SUCURSAL
=============================================*/
$(".tablas").on("click", ".btnEditarSucursal", function () {

    var idSucursal = $(this).attr("idSucursal");

    var datos = new FormData();
    datos.append("idSucursal", idSucursal);

    $.ajax({
        url: "ajax/sucursales.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function (respuesta) {

            $("#editarSucursal").val(respuesta["sucursal"]);
            $("#editarDireccion").val(respuesta["direccion"]);
            $("#editarTelefono").val(respuesta["telefono"]);
            $("#editarMunicipio").val(respuesta["municipio"]);
            $("#idSucursal").val(respuesta["id"]);

        }

    })


})

/*=============================================
ELIMINAR SUCURSAL
=============================================*/
$(".tablas").on("click", ".btnEliminarSucursal", function () {

    var idSucursalEliminado = $(this).attr("idSucursalEliminado");

    swal({
        title: '¿Está seguro de borrar la sucursal?',
        text: "¡Si no lo está puede cancelar la acción!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: 'Si, borrar sucursal!'
    }).then(function (result) {

        if (result.value) {
            if (result.value == true) {
                swal({
                    type: "success",
                    title: "La sucursal ha sido borrada correctamente",
                    showConfirmButton: true,
                    confirmButtonText: "Cerrar",
                    closeOnConfirm: false
                }).then(function (result) {
                    if (result.value) {
                        eliminarSucursal(idSucursalEliminado);
                        window.location = "sucursales";
                    }
                })
            } else {
                console.log('Cancelado');
            }

        }

    })

})


function eliminarSucursal(idSucursalEliminado) {

    var datos = new FormData();
    datos.append("idSucursalEliminado", idSucursalEliminado);

    $.ajax({
        url: "ajax/sucursales.ajax.php",
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
