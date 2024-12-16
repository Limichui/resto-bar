<?php
class ControladorFormularios{
	/*============================================================
	Validar usuario: Verificacion de las credenciales del usuario
	=============================================================*/
	static public function ctrValidarUsuario($valor1,$valor2){
		$respuesta = ModeloProductos::mdlValidarUsuario($valor1,$valor2);	
		
		if(isset($respuesta["id"])){
			session_start();
			$_SESSION["validarIngreso"] = "ok";
			$_SESSION["idUsu"]=$respuesta["id"];
			$_SESSION["usu"]=$valor1;
			$_SESSION["nomUsu"]=$respuesta["nombre"];
			$_SESSION["dirUsu"]=$respuesta["direccion"];
			$_SESSION["celUsu"]=$respuesta["celular"];
			$_SESSION["emailUsu"]=$respuesta["email"];
			$_SESSION["tipoUsu"]=$respuesta["tipo_id"];
			if(trim($respuesta["avatar"])!=''){
				$_SESSION["imgUsu"]=$respuesta["avatar"];
			}else{
				$_SESSION["imgUsu"]="default.jpg";
			}
		}
		return($respuesta);
	}
	/*=========================================================
	Listar Productos
	=========================================================*/
	
	static public function ctrListarProductos($datos){			
		$respuesta = ModeloFormularios::mdlListarProductos($datos);
		return($respuesta);
	}
	/*=========================================================
	Filtrar Producto por Id
	=========================================================*/
	static public function ctrFiltrarProductoId($datos){			
		$respuesta = ModeloProductos::mdlFiltrarProductoId($datos);
		return($respuesta);
	}
	/*=========================================================
	Registrar Nuevo Producto
	=========================================================*/
	static public function ctrRegistrarProducto($datos){			
		$respuesta = ModeloProductos::mdlRegistrarProducto($datos);
		return($respuesta);
	}
	/*=========================================================
	Modificar Producto
	=========================================================*/
	static public function ctrModificarProducto($datos){			
		$respuesta = ModeloProductos::mdlModificarProducto($datos);
		return($respuesta);
	}
	/*=========================================================
	Eliminar Producto
	=========================================================*/
	static public function ctrEliminarProducto($datos){			
		$respuesta = ModeloProductos::mdlEliminarProducto($datos);
		return($respuesta);
	}
	/*=========================================================
	Eliminar Todos los Detalles del Producto
	=========================================================*/
	static public function ctrEliminarDetalleProducto($datos){			
		$respuesta = ModeloProductos::mdlEliminarDetalleProducto($datos);
		return($respuesta);
	}
	/*=========================================================
	Eliminar Detalle del Producto
	=========================================================*/
	static public function ctrEliminarDetalleProductoId($datos){			
		$respuesta = ModeloProductos::mdlEliminarDetalleProductoId($datos);
		return($respuesta);
	}
	/*=========================================================
	Eliminar Imagen
	=========================================================*/
	static public function ctrModificarImagen($datos){			
		$respuesta = ModeloProductos::mdlModificarImagen($datos);
		return($respuesta);
	}
	/*=========================================================
	Listar Tipo Detalle Producto
	=========================================================*/
	static public function ctrListarTipoDetalle(){			
		$respuesta = ModeloFormularios::mdlListarTipoDetalle();
		return($respuesta);
	}
	/*=========================================================
	Filtrar Detalle Producto
	=========================================================*/
	static public function ctrFiltrarDetailsItemId($datos){			
		$respuesta = ModeloProductos::mdlFiltrarDetailsItemId($datos);
		return($respuesta);
	}
	/*=========================================================
	Registrar Nuevo Detalle de Producto
	=========================================================*/
	static public function ctrRegistrarDetalleProducto($datos){	
		$respuesta = ModeloProductos::mdlRegistrarDetalleProducto($datos);
		return($respuesta);
	}
}