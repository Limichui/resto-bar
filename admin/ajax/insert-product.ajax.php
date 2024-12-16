<?php
require_once "../controllers/formularios.controlador.php";
require_once "../models/productos.modelo.php";
require_once "../views/pages/functions/funciones.php";

$token= time()."_".randon(10);
$file=$_FILES["imagenInsert"];
$nombre = trim($file["name"]);
if ($nombre==""){
	$archivo="";
	$ban=true;
}else{
	$extension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION)); //Obtener solo la extension
	$longExt=strlen($extension)+1;
	$nombre = $file["name"]; //Nombre del archivo origunal
	$tipo = $file["type"]; //Tipo mime del archivo, poe ejemplo: image/gif
	$peso = $file["size"]; //tanamo en bytes del archivo o imagen recibido
	$tempFile = $file["tmp_name"]; //Nombre del archivo temporal que se utiliza para almacenar
	$etiqueta = substr($nombre,0,-$longExt);
	$archivo = $token.".".$extension;
	if(move_uploaded_file($file['tmp_name'], "../../assets/img/productos/$archivo")){
		$ban=true;
	}else $ban=false;
}
if($ban){
	if(($_POST["idSubCategoriaInsert"]==2)||($_POST["idSubCategoriaInsert"]==3)){
		$precio=0;		
    }else{
		$precio=$_POST["precioInsert"];
    }
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
		if(file_exists("../../assets/img/productos/$archivo")) unlink("../../assets/img/productos/$archivo");
	}
}else{
	echo json_encode(array("flat"=>"false"));
}

?>