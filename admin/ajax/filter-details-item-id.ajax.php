<?php
require_once "../controllers/formularios.controlador.php";
require_once "../models/productos.modelo.php";
require_once "../views/pages/functions/funciones.php";
	
?>
	
<div class="table-responsive">
	<table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
		<thead>
			<tr>
				<th>Tipo Detalle</th>
				<th>Detalle en Español</th>
				<th>Detalle en Ingles</th>
				<th>Detalle en Frances</th>
				<th>Detalle en Catalán</th>
				<th style='width: 20px;'>Acción</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$datos=array('id' => $_POST["id"]);
			$respuesta=ControladorFormularios::ctrFiltrarDetailsItemId($datos);
			$cade="";
			if($respuesta){
				foreach($respuesta as $key => $value){
					$cade.="<tr>
								<td>".$value['tipo_detalle_esp']."</td>
								<td>".$value['detalle_esp']."</td>
								<td>".$value['detalle_eng']."</td>
								<td>".$value['detalle_fra']."</td>
								<td>".$value['detalle_cat']."</td>
								<td>   
									<a class='nav-link' href='' onclick='show_modal_detalle_item_delete(".$value['id'].",".$value['producto_id'].");' data-toggle='modal'><i class='fas fa-trash-alt'></i></a>
								</td>
							</tr>";
				}
			}else{
				$cade.="<td colspan=6 class='text-center'>Sin Registros</td>";
			}                     
			echo($cade); 
			?>
		</tbody>
	</table>
</div>

