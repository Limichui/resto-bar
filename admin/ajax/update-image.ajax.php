<?php
require_once "../controllers/formularios.controlador.php";
require_once "../models/productos.modelo.php";
require_once "../views/pages/functions/funciones.php";
/*
print_r($_POST);
print_r($_FILES);
return false;

Array
(
    [imagenIdUpdate] => 162
    [imagenOption] => delete
)
Array
(
    [newImagenUpdate] => Array
        (
            [name] => 
            [full_path] => 
            [type] => 
            [tmp_name] => 
            [error] => 4
            [size] => 0
        )

)

Array
(
    [imagenIdUpdate] => 162
    [imagenOption] => update
)
Array
(
    [newImagenUpdate] => Array
        (
            [name] => 429864276_7729571080406450_4913391995585023329_n.jpg
            [full_path] => 429864276_7729571080406450_4913391995585023329_n.jpg
            [type] => image/jpeg
            [tmp_name] => C:\xampp\tmp\php7277.tmp
            [error] => 0
            [size] => 47070
        )

)
*/
$archivo='';
if($_POST["imagenOption"]=='update'){
	$token= time()."_".randon(10);
	$file=$_FILES["newImagenUpdate"];
	$nombre = trim($file["name"]);

	$extension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION)); //Obtener solo la extension
	$longExt=strlen($extension)+1;
	$nombre = $file["name"]; //Nombre del archivo original
	$tipo = $file["type"]; //Tipo mime del archivo, poe ejemplo: image/gif
	$peso = $file["size"]; //tanamo en bytes del archivo o imagen recibido
	$tempFile = $file["tmp_name"]; //Nombre del archivo temporal que se utiliza para almacenar
	$etiqueta = substr($nombre,0,-$longExt);
	$archivo = $token.".".$extension;
	if(move_uploaded_file($file['tmp_name'], "../../assets/img/productos/$archivo")){
		$ban=true;
	}
}
$datos=array('id' => $_POST["imagenIdUpdate"],
			 'imagen' => $archivo
			);
$registro=ControladorFormularios::ctrFiltrarProductoId($datos);
$respuesta=ControladorFormularios::ctrModificarImagen($datos);

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