<?php
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