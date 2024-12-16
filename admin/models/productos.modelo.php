<?php
require_once "../../models/conexion.php";
class ModeloProductos{
	/*=============================================
	Validando las credenciales de acceso: usuario y password
	=============================================*/
	
	static public function mdlValidarUsuario($valor1,$valor2){
		$stmt = Conexion::conectar()->prepare("SELECT  id, nombre, avatar, celular, direccion, email, tipo_id
			FROM usuarios
			WHERE (usuario = :usuario)AND(password = :password)AND(estado=1)");
		$stmt->bindParam(":usuario", $valor1, PDO::PARAM_STR);
		$stmt->bindParam(":password", $valor2, PDO::PARAM_STR);
		$stmt->execute();
		return $stmt -> fetch();		
	}

	/*=========================================================
	Filtrar Producto por Id
	=========================================================*/
	static public function mdlFiltrarProductoId($datos){			
		$stmt = Conexion::conectar()->prepare("SELECT id, imagen, producto_esp, producto_eng, producto_fra, producto_cat, precio, subcategoria_id, tipo_producto_id
			FROM productos 
			WHERE id=:id");
		$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
		$stmt->execute();
		return $stmt -> fetch();			
	}
	/*=========================================================
	Registrar Nuevo Producto
	=========================================================*/
	static public function mdlRegistrarProducto($datos){
		$stmt = Conexion::conectar()->prepare("INSERT INTO productos(imagen, producto_esp, producto_eng, producto_fra, producto_cat, 
					precio, estado, subcategoria_id, tipo_producto_id)
				VALUES(:imagen, :producto_esp, :producto_eng, :producto_fra, :producto_cat,
					:precio, :estado, :subcategoria_id, :tipo_producto_id)");
		$stmt->bindParam(":imagen", $datos["imagen"], PDO::PARAM_STR);
		$stmt->bindParam(":producto_esp", $datos["producto_esp"], PDO::PARAM_STR);
		$stmt->bindParam(":producto_eng", $datos["producto_eng"], PDO::PARAM_STR);
		$stmt->bindParam(":producto_fra", $datos["producto_fra"], PDO::PARAM_STR);
		$stmt->bindParam(":producto_cat", $datos["producto_cat"], PDO::PARAM_STR);
		$stmt->bindParam(":precio", $datos["precio"], PDO::PARAM_STR);
		$stmt->bindParam(":estado", $datos["estado"], PDO::PARAM_STR);
		$stmt->bindParam(":subcategoria_id", $datos["subcategoria_id"], PDO::PARAM_INT);
		$stmt->bindParam(":tipo_producto_id", $datos["tipo_producto_id"], PDO::PARAM_INT);
		if($stmt->execute()){
			return "1";
		}else{
			return "0";
		}
	}
	/*=========================================================
	Modificar Producto
	=========================================================*/
	static public function mdlModificarProducto($datos){
			$stmt = Conexion::conectar()->prepare("UPDATE productos 
				SET producto_esp=:producto_esp, producto_eng=:producto_eng, 
					producto_fra=:producto_fra, producto_cat=:producto_cat, precio=:precio
				WHERE id=:id");
			$stmt->bindParam(":producto_esp", $datos["producto_esp"], PDO::PARAM_STR);
			$stmt->bindParam(":producto_eng", $datos["producto_eng"], PDO::PARAM_STR);
			$stmt->bindParam(":producto_fra", $datos["producto_fra"], PDO::PARAM_STR);
			$stmt->bindParam(":producto_cat", $datos["producto_cat"], PDO::PARAM_STR);
			$stmt->bindParam(":precio", $datos["precio"], PDO::PARAM_STR);
			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			if($stmt->execute()){
				return "1";
			}else{
				return "0";
			}
	}
	/*=========================================================
	Eliminar Producto
	=========================================================*/
	static public function mdlEliminarProducto($datos){
		$stmt = Conexion::conectar()->prepare("DELETE FROM productos WHERE id=:id");
		$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
		if($stmt->execute()){
			return "1";
		}else{
			return "0";
		}
	}
	/*=========================================================
	Eliminar Todos los Detalles del Producto
	=========================================================*/
	static public function mdlEliminarDetalleProducto($datos){
		$stmt = Conexion::conectar()->prepare("DELETE FROM detalle_productos WHERE producto_id=:id");
		$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
		if($stmt->execute()){
			return "1";
		}else{
			return "0";
		}
	}
	/*=========================================================
	Eliminar Detalle del Producto
	=========================================================*/
	static public function mdlEliminarDetalleProductoId($datos){
		$stmt = Conexion::conectar()->prepare("DELETE FROM detalle_productos WHERE id=:id");
		$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
		if($stmt->execute()){
			return "1";
		}else{
			return "0";
		}
	}
	/*=========================================================
	Modificar Imagen
	=========================================================*/
	static public function mdlModificarImagen($datos){
		$stmt = Conexion::conectar()->prepare("UPDATE productos SET imagen = :imagen WHERE id=:id");
		$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
		$stmt->bindParam(":imagen", $datos["imagen"], PDO::PARAM_STR);
		if($stmt->execute()){
			return "1";
		}else{
			return "0";
		}
	}
	/*=========================================================
	Listar Detalle Producto
	=========================================================*/
	static public function mdlFiltrarDetailsItemId($datos){			
		$stmt = Conexion::conectar()->prepare("SELECT a.id, a.detalle_esp, a.detalle_eng, a.detalle_fra, a.detalle_cat, b.tipo_detalle_esp, a.producto_id
			FROM detalle_productos a INNER JOIN 
				tipo_detalle_producto b ON a.tipo_detalle_producto_id = b.id
			WHERE (a.producto_id=:id)AND(a.estado=1)
			ORDER BY b.tipo_detalle_esp, a.id ASC");
		$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
		$stmt->execute();
		return $stmt -> fetchAll();			
	}
	/*=========================================================
	Registrar Nuevo Producto
	=========================================================*/
	static public function mdlRegistrarDetalleProducto($datos){
		/*
		{"producto_id":"163",
			"detalle_esp":"espa\u00f1ol",
			"detalle_eng":"ingles",
			"detalle_fra":"frances",
			"detalle_cat":"catalan",
			"estado":1,
			"tipo_detalle_producto_id":"1"}
		*/
		$stmt = Conexion::conectar()->prepare("INSERT INTO detalle_productos(detalle_esp, detalle_eng, detalle_fra, detalle_cat, 
					estado, producto_id, tipo_detalle_producto_id)
				VALUES(:detalle_esp, :detalle_eng, :detalle_fra, :detalle_cat,
					:estado, :producto_id, :tipo_detalle_producto_id)");
		$stmt->bindParam(":detalle_esp", $datos["detalle_esp"], PDO::PARAM_STR);
		$stmt->bindParam(":detalle_eng", $datos["detalle_eng"], PDO::PARAM_STR);
		$stmt->bindParam(":detalle_fra", $datos["detalle_fra"], PDO::PARAM_STR);
		$stmt->bindParam(":detalle_cat", $datos["detalle_cat"], PDO::PARAM_STR);
		$stmt->bindParam(":estado", $datos["estado"], PDO::PARAM_STR);
		$stmt->bindParam(":producto_id", $datos["producto_id"], PDO::PARAM_INT);
		$stmt->bindParam(":tipo_detalle_producto_id", $datos["tipo_detalle_producto_id"], PDO::PARAM_INT);
		if($stmt->execute()){
			return "1";
		}else{
			return "0";
		}
	}
}