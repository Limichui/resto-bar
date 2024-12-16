<?php
session_start(); 
if(isset($_GET["accion"])){
	if($_GET["accion"] == "main" ||
		$_GET["accion"] == "breakfasts" || 
		$_GET["accion"] == "daily-menu" ||
		$_GET["accion"] == "childrens-menu" ||
		$_GET["accion"] == "entrance" ||
		$_GET["accion"] == "dishes" ||
		$_GET["accion"] == "specials" ||
		$_GET["accion"] == "cocktails" ||
		$_GET["accion"] == "login" ||
		$_GET["accion"] == "profile" ||
		$_GET["accion"] == "salir"){
		include "pages/".$_GET["accion"].".php";
	}else{
		include "pages/error_404.php";
	}
}else{
	if(isset($_SESSION["idUsu"])){
		echo "<script>window.location='?accion=main';</script>";
	}else{
		echo "<script>window.location='?accion=login';</script>";
	}
}
?>