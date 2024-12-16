<?php
require_once "../controllers/formularios.controlador.php";
require_once "../models/productos.modelo.php";
require_once "../views/pages/functions/funciones.php";

$datos=array('producto_id' => $_POST["detailsProductIdInsert"],
		'detalle_esp' => $_POST["detailsItemEspInsert"],
		'detalle_eng' => $_POST["detailsItemEngInsert"],
		'detalle_fra' => $_POST["detailsItemFraInsert"],
		'detalle_cat' => $_POST["detailsItemCatInsert"],
		'estado' => 1,
		'tipo_detalle_producto_id' => $_POST["tipoDetailsInsert"]
		);
$respuesta=ControladorFormularios::ctrRegistrarDetalleProducto($datos);

//echo json_encode($respuesta);

if($respuesta=="1"){
	echo json_encode(array("id"=>$_POST["detailsProductIdInsert"]));
}else{
	echo json_encode(array("id"=>0));
}

?>