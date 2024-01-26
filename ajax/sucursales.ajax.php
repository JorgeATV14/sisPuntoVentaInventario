<?php

require_once "../controladores/sucursales.controlador.php";
require_once "../modelos/sucursales.modelo.php";

class AjaxSucursales{

	/*=============================================
	EDITAR SUCURSAL
	=============================================*/	

	public $idSucursal;
	public $idSucursalEliminado;

	public function ajaxEditarSucursal(){

		$item = "id";
		$valor = $this->idSucursal;

		$respuesta = ControladorSucursales::ctrMostrarSucursales($item, $valor);

		echo json_encode($respuesta);

	}

	/*=============================================
	ELIMINAR SUCURSAL
	=============================================*/	

	public function ajaxEliminarSucursal(){

		$item = "id";
		$valor = $this->idSucursalEliminado;
		$respuesta = ControladorSucursales::ctrBorrarSucursal($item, $valor);

		echo json_encode($respuesta);

	}
}

/*=============================================
EDITAR SUCURSAL
=============================================*/	
if(isset($_POST["idSucursal"])){

	$categoria = new AjaxSucursales();
	$categoria -> idSucursal = $_POST["idSucursal"];
	$categoria -> ajaxEditarSucursal();
}


/*=============================================
ELIMINAR SUCURSAL
=============================================*/

if(isset($_POST["idSucursalEliminado"])){

	$eliminar = new AjaxSucursales();
	$eliminar -> idSucursalEliminado = $_POST["idSucursalEliminado"];
	$eliminar -> ajaxEliminarSucursal();

}