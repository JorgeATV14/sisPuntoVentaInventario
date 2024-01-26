<?php

require_once "../controladores/clientes.controlador.php";
require_once "../modelos/clientes.modelo.php";

class AjaxClientes{

	/*=============================================
	EDITAR CLIENTE
	=============================================*/	

	public $idCliente;
	public $idClienteEliminado;

	public function ajaxEditarCliente(){

		$item = "id";
		$valor = $this->idCliente;

		$respuesta = ControladorClientes::ctrMostrarClientes($item, $valor);

		echo json_encode($respuesta);


	}

	/*=============================================
	ELIMINAR CLIENTE
	=============================================*/	

	public function ajaxEliminarCliente(){

		$item = "id";
		$valor = $this->idClienteEliminado;
		
		$respuesta = ControladorClientes::ctrEliminarCliente($item, $valor);

		echo json_encode($respuesta);

	}

}

/*=============================================
EDITAR CLIENTE
=============================================*/	

if(isset($_POST["idCliente"])){

	$cliente = new AjaxClientes();
	$cliente -> idCliente = $_POST["idCliente"];
	$cliente -> ajaxEditarCliente();

}

/*=============================================
ELIMINAR CLIENTE
=============================================*/

if(isset($_POST["idClienteEliminado"])){
	echo $_POST["idClienteEliminado"];
	// $eliminar = new AjaxClientes();
	// $eliminar -> idClienteEliminado = $_POST["idClienteEliminado"];
	// $eliminar -> ajaxEliminarCliente();

}
