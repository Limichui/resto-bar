<?php
session_start();
require_once "../controllers/cuenta.controlador.php";
require_once "../models/cuenta.modelo.php";
require_once "../views/pages/functions/funciones.php";
$imgAnt=$_SESSION['imgUsu'];
$datos=array('id' => $_SESSION["idUsu"],
		'usuario' => strtolower(trim($_POST["txtUser"]))
	);
$respuesta=ControladorUsuario::ctrVerificarUsuario($datos);
if($respuesta==0){
	$token= time()."_".randon(10);
	$file=$_FILES["filePhoto"];
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
		if(move_uploaded_file($file['tmp_name'], "../assets/images/avatars/$archivo")){
			$ban=true;
		}else $ban=false;
	}
	if($ban){
		$datos=array('imagen' => $archivo,
			'user' => strtolower(trim($_POST["txtUser"])),
			'useName' => strtoupper(trim($_POST["txtName"])),
			'address' => strtoupper(trim($_POST["txtAddress"])),
			'cellPhone' => strtoupper(trim($_POST["txtCellPhone"])),
			'email' => strtolower(trim($_POST["txtEmail"])),
			'id' =>  $_SESSION["idUsu"],
			'img' => $archivo
			);
		$respuesta=ControladorUsuario::ctrModificarUsuario($datos);
		if($respuesta==1){
			$_SESSION["usu"]=$datos["user"];
			$_SESSION["nomUsu"]=$datos["useName"];
			$_SESSION["dirUsu"]=$datos["address"];
			$_SESSION["emailUsu"]=$datos["email"];
			$_SESSION["celUsu"]=$datos["cellPhone"];
			if($datos["img"]!=''){
				$_SESSION["imgUsu"]=$datos["img"];
				if($imgAnt!='default.jpg'){
				    if(file_exists("../assets/images/avatars/$imgAnt")) unlink("../assets/images/avatars/$imgAnt");
			    }
			}
			$respuesta=array('flat' => true, 'msg' =>"Se actualizó correctamente los datos del usuario.");
		}else{
			$respuesta=array('flat' => false, 'op' => 1, 'msg' =>"Orurrió un error al subir la imagen. Intente con otro.");
			if(file_exists("../assets/images/avatars/$archivo")) unlink("../assets/images/avatars/$archivo");
		}
	}else{
		$respuesta=array('flat' => false, 'op' => 1, 'msg' =>"Orurrió un error al subir la imagen. Intente con otro.");
	}
}else{
	$respuesta=array('flat' => false, 'op' => 0, 'msg' =>"El nuevo usuario que introdujo no está disponible. Intente con otro.");
}
echo json_encode($respuesta);

?>