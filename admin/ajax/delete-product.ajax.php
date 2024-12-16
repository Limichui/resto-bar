<?php
require_once "../controllers/formularios.controlador.php";
require_once "../models/productos.modelo.php";
require_once "../views/pages/functions/funciones.php";



$datos=array('id' => $_POST["productoIdDelete"]);
ControladorFormularios::ctrEliminarDetalleProducto($datos);

$registro=ControladorFormularios::ctrFiltrarProductoId($datos);
$respuesta=ControladorFormularios::ctrEliminarProducto($datos);

if($respuesta=="1"){
	if($registro['imagen'] != ''){
		$archivo=$registro['imagen'];
		if(file_exists("../../assets/img/productos/$archivo")) unlink("../../assets/img/productos/$archivo");
	}
	echo json_encode(array("flat"=>"true"));
}else{
	echo json_encode(array("flat"=>"false"));
}

?>