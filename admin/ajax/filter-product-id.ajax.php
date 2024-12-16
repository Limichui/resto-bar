<?php
require_once "../controllers/formularios.controlador.php";
require_once "../models/productos.modelo.php";
require_once "../views/pages/functions/funciones.php";
	$datos=array('id' => $_POST["id"]);
	$respuesta=ControladorFormularios::ctrFiltrarProductoId($datos);
	if($respuesta) echo json_encode($respuesta);
	else echo json_encode(array("flat"=>"false"));
?>
