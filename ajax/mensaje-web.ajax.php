<?php
require_once "../controllers/formularios.controlador.php";
require_once "../models/formularios.modelo.php";



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
$datos=array('nombre' => mb_strtoupper($_POST["msgNombre"], 'UTF-8'),
		'email' => mb_strtolower($_POST["msgEmail"], 'UTF-8'),
		'asunto' => mb_strtoupper($_POST["msgAsunto"], 'UTF-8'),
		'mensaje' => $_POST["msgMensaje"]
		);
$respuesta=ControladorFormularios::ctrRegistrarMensaje($datos);
if($respuesta=="1"){
	echo json_encode(array("flag"=>"true"));
}else{
	echo json_encode(array("flag"=>"false"));
}

