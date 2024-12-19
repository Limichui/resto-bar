<?php
session_start();
if(!isset($_SESSION['lang'])){
	$_SESSION['lang'] = "Español";
	$_SESSION['flag'] = "assets/img/flags/es.png";
} 
//session_destroy();
if(isset($_GET["accion"])){	
	$page=explode("/",$_GET["accion"]);
	if(is_file("views/pages/".$page[0].".php")){
		include "views/pages/".$page[0].".php";	
	}else{
		include "views/pages/error-404.php";
	}
}else{
	include "pages/web.php";
}
?>