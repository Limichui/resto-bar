<?php
require_once "controllers/inicio.controlador.php";
require_once "controllers/formularios.controlador.php";
require_once "models/formularios.modelo.php";

$inicio = new ControladorInicio();
$inicio -> ctrTraerInicio();
?>