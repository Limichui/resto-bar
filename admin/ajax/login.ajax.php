<?php
//echo json_encode($_POST);

require_once "../controllers/formularios.controlador.php";
//require_once "../models/formularios.modelo.php";
require_once "../models/productos.modelo.php";

//---Clases de Ajax--------------------
class AjaxFormularios{
	public $user;
	public $pass;
	public function ajaxValidarUsuario(){
		$valor1=$this->user;
		$valor2=$this->pass;
		$respuesta=ControladorFormularios::ctrValidarUsuario($valor1,$valor2);
		echo json_encode($respuesta);
	}
}
//---Objeto de AJAX que recibe la variable POST--------------------
if(isset($_POST["txtUser"])){
	$valUser = new AjaxFormularios();
	//$valUser -> user = $_POST["user"];
	//$valUser -> pass = $_POST["password"];
	$valUser -> user = $_POST["txtUser"];
	$valUser -> pass = $_POST["txtPassword"];
	$valUser -> ajaxValidarUsuario();
}

?>