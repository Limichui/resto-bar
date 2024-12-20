<?php
require_once "conexion.php";
class ModeloFormularios{
	/*=========================================================
	Listar menú
	=========================================================*/
	static public function mdlListarMenu(){			
		$stmt = Conexion::conectar()->prepare("SELECT id, opcion_esp, opcion_eng, opcion_fra, opcion_cat, link, orden
			FROM menu_opciones WHERE (estado=1) ORDER BY orden ASC");
		$stmt->execute();
		return $stmt -> fetchAll();		
	}
	/*=========================================================
	Listar menú
	=========================================================*/
	static public function mdlListarTestimonios(){			
		$stmt = Conexion::conectar()->prepare("SELECT id, avatar, nombre, comentario
			FROM testimonios ORDER BY id DESC LIMIT 4");
		$stmt->execute();
		return $stmt -> fetchAll();		
	}
	/*=========================================================
	Listar productos
	=========================================================*/
	static public function mdlListarProductosWeb($datos){		
		$stmt = Conexion::conectar()->prepare("SELECT id, imagen, producto_esp, producto_eng, producto_fra, producto_cat, precio
			FROM productos 
			WHERE (subcategoria_id = :subcategoria_id)AND(tipo_producto_id = :tipo_producto_id)AND(estado=1)");
		$stmt->bindParam(":subcategoria_id", $datos["subCategoria"], PDO::PARAM_INT);
		$stmt->bindParam(":tipo_producto_id", $datos["tipoProducto"], PDO::PARAM_INT);
		$stmt->execute();
		return $stmt -> fetchAll();	
	}
	/*=========================================================
	Listar detalle productos
	=========================================================*/
	static public function mdlListarDetalleProductos($idProducto){		
		$stmt = Conexion::conectar()->prepare("SELECT a.id, a.detalle_esp, a.detalle_eng, a.detalle_fra, a.detalle_cat, b.tipo_detalle_esp
			FROM detalle_productos a INNER JOIN 
				tipo_detalle_producto b ON a.tipo_detalle_producto_id = b.id
			WHERE (a.producto_id=:producto_id)AND(a.estado=1)
			ORDER BY b.tipo_detalle_esp, a.id ASC");
		$stmt->bindParam(":producto_id", $idProducto, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt -> fetchAll();	
	}
	/*=========================================================
	Listar idiomas
	=========================================================*/
	static public function mdlListarIdiomas(){		
		$stmt = Conexion::conectar()->prepare("SELECT id, imagen, idioma FROM idiomas");
		$stmt->execute();
		return $stmt -> fetchAll();	
	}
	/*=========================================================
	Listar títulos footer
	=========================================================*/
	static public function mdlListarTitulosFooter(){		
		$stmt = Conexion::conectar()->prepare("SELECT id, titulo_esp, titulo_eng, titulo_fra, titulo_cat FROM sys_titulos_footer");
		$stmt->execute();
		return $stmt -> fetchAll();	
	}
	/*=========================================================
	Listar detalle título footer
	=========================================================*/
	static public function mdlListarDetalleTituloFooter($id){		
		$stmt = Conexion::conectar()->prepare("SELECT id, detalle1_esp, detalle1_eng, detalle1_fra, detalle1_cat, detalle2_esp, detalle2_eng, detalle2_fra, detalle2_cat 
			FROM sys_detalle_titulos_footer
			WHERE titulo_footer_id=:titulo_id
			ORDER BY id ASC");
		$stmt->bindParam(":titulo_id", $id, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt -> fetchAll();	
	}
	/*=========================================================
	Listar derechos reservados
	=========================================================*/
	static public function mdlListarDerechosReservados(){		
		$stmt = Conexion::conectar()->prepare("SELECT anio, dominio, derechos_esp, derechos_eng, derechos_fra, derechos_cat, 
				desarrollado_esp, desarrollado_eng, desarrollado_fra, desarrollado_cat,url 
				FROM sys_derechos_reservados");
		$stmt->execute();
		return $stmt -> fetchAll();	
	}
	/*=========================================================
	Filtrar inicio cabecera
	=========================================================*/
	static public function mdlFiltrarInicioCabecera($id){		
		$stmt = Conexion::conectar()->prepare("SELECT titulo_esp, titulo_eng, titulo_fra, titulo_cat, parrafo_esp, parrafo_eng, parrafo_fra, parrafo_cat
				FROM sys_cabecera
				WHERE menu_opcion_id=:menu_opcion_id");
		$stmt->bindParam(":menu_opcion_id", $id, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt -> fetchAll();	
	}
}