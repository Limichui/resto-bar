<?php
session_start();
require_once "../controllers/cuenta.controlador.php";
require_once "../models/cuenta.modelo.php";
require_once "../views/pages/functions/funciones.php";

$datos=array('id' => $_SESSION["idUsu"],
		'password' => $_POST["txtPassword"],
		'password1' => $_POST["txtPassword1"]
		);

$response=ControladorUsuario::ctrVerificarPassword($datos);

if($response != ''){
	$response=ControladorUsuario::ctrModificarPassword($datos);
	if($response == 1){
		$response=array('flat' => true, 'msg' =>"Se actualizó correctamente la contraseña.");
	}else{
		$response=array('flat' => false, 'op' => 1, 'msg' =>"Ocurrió un error. Intente más tarde.");
	}
}else{
	$response=array('flat' => false, 'op' => 0, 'msg' =>"El password actual es incorrecto.");
}
echo json_encode($response);

?>