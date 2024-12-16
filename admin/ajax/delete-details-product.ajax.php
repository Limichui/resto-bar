<?php
require_once "../controllers/formularios.controlador.php";
require_once "../models/productos.modelo.php";
require_once "../views/pages/functions/funciones.php";

$datos=array('id' => $_POST["detailsDeleteId"]);

$respuesta=ControladorFormularios::ctrEliminarDetalleProductoId($datos);

if($respuesta=="1"){
	echo json_encode(array("id"=>$_POST["detailsDeleteProductId"]));
}else{
	echo json_encode(array("id"=>0));
}

?>