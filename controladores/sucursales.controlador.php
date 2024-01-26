<?php

class ControladorSucursales
{

    /*=============================================
	CREAR CATEGORIAS
	=============================================*/

    static public function ctrCrearSucursal()
    {

        if (isset($_POST["nuevaSucursal"])) {

            if (preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevaSucursal"])) {

                $tabla = "sucursales";

                $datos = array(
                    "sucursal" => $_POST["nuevaSucursal"],
                    "direccion" => $_POST["nuevaDireccion"],
                    "telefono" => $_POST["nuevoTelefono"],
                    "municipio" => $_POST["nuevoMunicipio"]
                );

                $respuesta = ModeloSucursales::mdlIngresarSucursal($tabla, $datos);

                if ($respuesta == "ok") {

                    echo '<script>

					swal({
						  type: "success",
						  title: "La Sucursal ha sido guardada correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "sucursales";

									}
								})

					</script>';
                }
            } else {

                echo '<script>

					swal({
						  type: "error",
						  title: "¡La Sucursal no puede ir vacía o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "sucursales";

							}
						})

			  	</script>';
            }
        }
    }

    /*=============================================
	MOSTRAR CATEGORIAS
	=============================================*/

    static public function ctrMostrarSucursales($item, $valor)
    {

        $tabla = "sucursales";

        $respuesta = ModeloSucursales::mdlMostrarSucursales($tabla, $item, $valor);

        return $respuesta;
    }

    /*=============================================
	EDITAR CATEGORIA
	=============================================*/

    static public function ctrEditarSucursal()
    {

        if (isset($_POST["editarSucursal"])) {

            if (preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarSucursal"])) {

                $tabla = "sucursales";

                $datos = array(
                    "sucursal" => $_POST["editarSucursal"],
                    "direccion" => $_POST["editarDireccion"],
                    "telefono" => $_POST["editarTelefono"],
                    "municipio" => $_POST["editarMunicipio"],
                    "id" => $_POST["idSucursal"]
                );

                $respuesta = ModeloSucursales::mdlEditarSucursal($tabla, $datos);

                if ($respuesta == "ok") {

                    echo '<script>

					swal({
						  type: "success",
						  title: "La Sucursal ha sido cambiada correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "sucursales";

									}
								})

					</script>';
                }
            } else {

                echo '<script>

					swal({
						  type: "error",
						  title: "¡La Sucursal no puede ir vacía o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "sucursales";

							}
						})

			  	</script>';
            }
        }
    }

    /*=============================================
	BORRAR CATEGORIA
	=============================================*/

    static public function ctrBorrarSucursal()
    {

        if (isset($_POST["idSucursalEliminado"])) {

            $tabla = "sucursales";
            $datos = $_POST["idSucursalEliminado"];

            $respuesta = ModeloSucursales::mdlBorrarSucursal($tabla, $datos);

            if ($respuesta == "ok") {

                echo '<script>

					swal({
						  type: "success",
						  title: "La Sucursal ha sido borrada correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "sucursales";

									}
								})

					</script>';
            }
        }
    }
}
