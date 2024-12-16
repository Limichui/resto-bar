<?php
require_once "../controllers/formularios.controlador.php";
require_once "../models/productos.modelo.php";
require_once "../views/pages/functions/funciones.php";

	$datos=array('id' => $_POST["productoIdUpdate"],
			'producto_esp' => $_POST["productoEspUpdate"],
			'producto_eng' => $_POST["productoEngUpdate"],
			'producto_fra' => $_POST["productoFraUpdate"],
			'producto_cat' => $_POST["productoCatUpdate"],
			'precio' => $_POST["precioUpdate"]
			);
	$respuesta=ControladorFormularios::ctrModificarProducto($datos);
	if($respuesta=="1"){
		echo json_encode(array("flat"=>"true"));
	}else{
		echo json_encode(array("flat"=>"false"));
	}

?>