<?php
require_once "../controllers/formularios.controlador.php";
require_once "../models/productos.modelo.php";
require_once "../views/pages/functions/funciones.php";



/*
print_r($_POST);
Array
(
    [msgNombre] => sdfsfsdf
    [msgEmail] => asddaad@adadd.com
    [msgAsunto] => fdfdsdsg
    [msgMensaje] => vzzvzvzvzv
)
*/
$datos=array('imagen' => $archivo,
		'producto_esp' => $_POST["productoEspInsert"],
		'producto_eng' => $_POST["productoEngInsert"],
		'producto_fra' => $_POST["productoFraInsert"],
		'producto_cat' => $_POST["productoCatInsert"],
		'precio' => $precio,
		'estado' => 1,
		'subcategoria_id' => $_POST["idSubCategoriaInsert"],
		'tipo_producto_id' => $_POST["idTipoProductoInsert"]
		);
$respuesta=ControladorFormularios::ctrRegistrarProducto($datos);
if($respuesta=="1"){
	echo json_encode(array("flat"=>"true"));
}else{
	echo json_encode(array("flat"=>"false"));
}
	*/
