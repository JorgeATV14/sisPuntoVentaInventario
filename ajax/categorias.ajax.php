<?php

require_once "../controladores/categorias.controlador.php";
require_once "../modelos/categorias.modelo.php";

class AjaxCategorias{

	/*=============================================
	EDITAR CATEGORÍA
	=============================================*/	

	public $idCategoria;
	public $idCategoriaEliminado;

	public function ajaxEditarCategoria(){

		$item = "id";
		$valor = $this->idCategoria;

		$respuesta = ControladorCategorias::ctrMostrarCategorias($item, $valor);

		echo json_encode($respuesta);

	}

	/*=============================================
	ELIMINAR USUARIO
	=============================================*/	

	public function ajaxEliminarCategoria(){

		$item = "id";
		$valor = $this->idCategoriaEliminado;
		$respuesta = ControladorCategorias::ctrBorrarCategoria($item, $valor);

		echo json_encode($respuesta);

	}
}

/*=============================================
EDITAR CATEGORÍA
=============================================*/	
if(isset($_POST["idCategoria"])){

	$categoria = new AjaxCategorias();
	$categoria -> idCategoria = $_POST["idCategoria"];
	$categoria -> ajaxEditarCategoria();
}


/*=============================================
ELIMINAR CATEGORIA
=============================================*/

if(isset($_POST["idCategoriaEliminado"])){

	$eliminar = new AjaxCategorias();
	$eliminar -> idCategoriaEliminado = $_POST["idCategoriaEliminado"];
	$eliminar -> ajaxEliminarCategoria();

}