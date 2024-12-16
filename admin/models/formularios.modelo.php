<?php
require_once "../models/conexion.php";
class ModeloFormularios{
	/*=========================================================
	Listar Productos
	=========================================================*/
	static public function mdlListarProductos($datos){			
		$stmt = Conexion::conectar()->prepare("SELECT id, imagen, producto_esp, producto_eng, producto_fra, producto_cat, precio, subcategoria_id
			FROM productos 
			WHERE (subcategoria_id = :subcategoria_id)AND(tipo_producto_id = :tipo_producto_id)AND(estado=1)
			ORDER BY id ASC");
		$stmt->bindParam(":subcategoria_id", $datos["subcategoria_id"], PDO::PARAM_INT);
		$stmt->bindParam(":tipo_producto_id", $datos["tipo_producto_id"], PDO::PARAM_INT);
		$stmt->execute();
		return $stmt -> fetchAll();			
	}
	/*=========================================================
	Listar Tipo Detalle Producto
	=========================================================*/
	static public function mdlListarTipoDetalle(){			
		$stmt = Conexion::conectar()->prepare("SELECT id, tipo_detalle_esp
			FROM tipo_detalle_producto
			WHERE (estado=1)
			ORDER BY id ASC");
		$stmt->execute();
		return $stmt -> fetchAll();			
	}
	
	
}