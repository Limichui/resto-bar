<?php
class ControladorFormularios{
	
	/*=========================================================
	Listar menú
	=========================================================*/
	static public function ctrListarMenu(){			
		$respuesta = ModeloFormularios::mdlListarMenu();
		return($respuesta);
	}
	/*=========================================================
	Listar testimonios
	=========================================================*/
	static public function ctrListarTestimonios(){			
		$respuesta = ModeloFormularios::mdlListarTestimonios();
		return($respuesta);
	}
	/*=========================================================
	Listar productos
	=========================================================*/
	static public function ctrListarProductosWeb($idSubCategoria, $tipoProducto){	
		$datos=array('subCategoria' => $idSubCategoria,
			'tipoProducto' => $tipoProducto,
		);	
		$respuesta = ModeloFormularios::mdlListarProductosWeb($datos);
		return($respuesta);
	}
	/*=========================================================
	Listar productos
	=========================================================*/
	static public function ctrListarDetalleProductos($idProducto){		
		$respuesta = ModeloFormularios::mdlListarDetalleProductos($idProducto);
		return($respuesta);
	}
	/*=========================================================
	Listar idiomas
	=========================================================*/
	static public function ctrListarIdiomas(){		
		$respuesta = ModeloFormularios::mdlListarIdiomas();
		return($respuesta);
	}
	/*=========================================================
	Listar títulos footer
	=========================================================*/
	static public function ctrListarTitulosFooter(){		
		$respuesta = ModeloFormularios::mdlListarTitulosFooter();
		return($respuesta);
	}
	/*=========================================================
	Listar detalle título footer
	=========================================================*/
	static public function ctrListarDetalleTituloFooter($id){		
		$respuesta = ModeloFormularios::mdlListarDetalleTituloFooter($id);
		return($respuesta);
	}
	/*=========================================================
	Listar derechos reservados
	=========================================================*/
	static public function ctrListarDerechosReservados(){		
		$respuesta = ModeloFormularios::mdlListarDerechosReservados();
		return($respuesta);
	}
	/*=========================================================
	Filtrar inicio cabecera
	=========================================================*/
	static public function ctrFiltrarInicioCabecera($id){		
		$respuesta = ModeloFormularios::mdlFiltrarInicioCabecera($id);
		return($respuesta);
	}
	/*=========================================================
	Listar Subtitulos
	=========================================================*/
	static public function ctrListarSubTitulos($id){		
		$respuesta = ModeloFormularios::mdlListarSubTitulos($id);
		return($respuesta);
	}
	/*=========================================================
	Filtrar experiencia
	=========================================================*/
	static public function ctrFiltrarExperiencia($id){		
		$respuesta = ModeloFormularios::mdlFiltrarExperiencia($id);
		return($respuesta);
	}
	/*=========================================================
	Listar parrafos de subtitulos
	=========================================================*/
	static public function ctrListarParrafosSubtitulos($id){		
		$respuesta = ModeloFormularios::mdlListarParrafosSubtitulos($id);
		return($respuesta);
	}
	/*=========================================================
	Filtrar datos contacto
	=========================================================*/
	static public function ctrFiltrarDatosContacto($id){		
		$respuesta = ModeloFormularios::mdlFiltrarDatosContacto($id);
		return($respuesta);
	}
	/*=========================================================
	Filtrar label de fromulario de contacto
	=========================================================*/
	static public function ctrFiltrarLabelFromContacto(){		
		$respuesta = ModeloFormularios::mdlFiltrarLabelFromContacto();
		return($respuesta);
	}
	/*=========================================================
	Filtrar menu cabecera
	=========================================================*/
	static public function ctrListarMenuCabecera($id){		
		$respuesta = ModeloFormularios::mdlListarMenuCabecera($id);
		return($respuesta);
	}
}