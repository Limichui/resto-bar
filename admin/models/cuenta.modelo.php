<?php
require_once "../../models/conexion.php";
class ModeloUsuario{
	/*=========================================================
	Verificar Password
	=========================================================*/
	static public function mdlVerificarPassword($datos){

		$stmt = Conexion::conectar()->prepare("SELECT id 
			FROM usuarios
			WHERE id=:id AND password=:password");
		$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
		$stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);
		$stmt->execute();
		return $stmt -> fetch();
	}
	/*=========================================================
	Modificar Password
	=========================================================*/
	static public function mdlModificarPassword($datos){
		$stmt = Conexion::conectar()->prepare("UPDATE usuarios 
			SET password=:password
			WHERE id=:id");
		$stmt->bindParam(":password", $datos["password1"], PDO::PARAM_STR);
		$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
		if($stmt->execute()){
			return 1;
		}else{
			return 0;
		}
	}
	/*=========================================================
	Verificar cuenta usuario
	=========================================================*/
	static public function mdlVerificarUsuario($datos){

		$stmt = Conexion::conectar()->prepare("SELECT id 
			FROM usuarios
			WHERE usuario=:usuario AND id<>:id");
		$stmt->bindParam(":usuario", $datos["usuario"], PDO::PARAM_STR);
		$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
		$stmt->execute();
		return $stmt -> rowCount();
	}
	/*=========================================================
	Modificar datos usuario
	=========================================================*/
	static public function mdlModificarUsuario($datos){
		if($datos["img"]==''){
			$stmt = Conexion::conectar()->prepare("UPDATE usuarios 
			SET usuario=:usuario, nombre=:nombre, celular=:celular, direccion=:direccion, email=:email
			WHERE id=:id");
			$stmt->bindParam(":usuario", $datos["user"], PDO::PARAM_STR);
			$stmt->bindParam(":nombre", $datos["useName"], PDO::PARAM_STR);
			$stmt->bindParam(":celular", $datos["cellPhone"], PDO::PARAM_STR);
			$stmt->bindParam(":direccion", $datos["address"], PDO::PARAM_STR);
			$stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
		}else{
			$stmt = Conexion::conectar()->prepare("UPDATE usuarios 
			SET usuario=:usuario, nombre=:nombre, celular=:celular, direccion=:direccion, email=:email, avatar=:avatar 
			WHERE id=:id");
			$stmt->bindParam(":usuario", $datos["user"], PDO::PARAM_STR);
			$stmt->bindParam(":nombre", $datos["useName"], PDO::PARAM_STR);
			$stmt->bindParam(":celular", $datos["cellPhone"], PDO::PARAM_STR);
			$stmt->bindParam(":direccion", $datos["address"], PDO::PARAM_STR);
			$stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
			$stmt->bindParam(":avatar", $datos["img"], PDO::PARAM_STR);
			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
		}
		if($stmt->execute()){
			return 1;
		}else{
			return 0;
		}
		
	}
}