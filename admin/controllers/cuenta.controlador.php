<?php
class ControladorUsuario{
	/*=========================================================
	Verificar password
	=========================================================*/
	static public function ctrVerificarPassword($datos){			
		$respuesta = ModeloUsuario::mdlVerificarPassword($datos); 
		return($respuesta);
	}
	/*=========================================================
	Modificar password
	=========================================================*/
	static public function ctrModificarPassword($datos){			
		$respuesta = ModeloUsuario::mdlModificarPassword($datos);  
		return($respuesta);
	}
	/*=========================================================
	Verificar cuenta usuario
	=========================================================*/
	static public function ctrVerificarUsuario($datos){			
		$respuesta = ModeloUsuario::mdlVerificarUsuario($datos);  
		return($respuesta);
	}
	/*=========================================================
	Modificar datos de usuario
	=========================================================*/
	static public function ctrModificarUsuario($datos){	
		$respuesta = ModeloUsuario::mdlModificarUsuario($datos);  
		return($respuesta);
	}
}