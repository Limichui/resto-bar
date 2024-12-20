<div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
	<div class="container py-5">
		<?php
		$listTitulo=ControladorFormularios::ctrListarTitulosFooter();
		$cade="<div class='row g-5'>";
		foreach ($listTitulo as $key => $value) {
			$idTitulo=$value['id'];

			if($_SESSION['lang']==='English') $titulo=$value['titulo_eng'];
			else if($_SESSION['lang']==='Français') $titulo=$value['titulo_fra'];
			else if($_SESSION['lang']==='Català') $titulo=$value['titulo_cat'];
			else $titulo=$value['titulo_esp'];
			$cade.="<div class='col-lg-4 col-md-6'>
					<h4 class='section-title ff-secondary text-start text-primary fw-normal mb-4'>".$titulo."</h4>";
			/* Detalle..........................*/
			$listDetalleTitulo=ControladorFormularios::ctrListarDetalleTituloFooter($idTitulo);
			$subCade="";
			foreach ($listDetalleTitulo as $key1 => $value1) {
				if($_SESSION['lang']==='English'){
					$detalle1=$value1['detalle1_eng'];
					$detalle2=$value1['detalle2_eng'];
				}else if($_SESSION['lang']==='Français'){
					$detalle1=$value1['detalle1_fra'];
					$detalle2=$value1['detalle2_fra'];
				}else if($_SESSION['lang']==='Català'){
					$detalle1=$value1['detalle1_cat'];
					$detalle2=$value1['detalle2_cat'];
				}else{
					$detalle1=$value1['detalle1_esp'];
					$detalle2=$value1['detalle2_esp'];
				}
				if($idTitulo===1){
					$subCade.="<p class='mb-2'><i class='".$detalle1."'></i>".$detalle2."</p>";
				}else if($idTitulo===2){
					$subCade.="<h5 class='text-light fw-normal'>".$detalle1."</h5>
								<p>".$detalle2."</p>";
				}else{
					$subCade="<p>".$detalle1."</p>
							<div class='position-relative mx-auto' style='max-width: 400px;'>
								<input class='form-control border-primary w-100 py-3 ps-4 pe-5' type='text' placeholder=''>
								<button type='button' class='btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2'>".$detalle2."</button>
							</div>";
				}
			}
			$cade.=$subCade;
			/*Fin Detalle.......................*/
			$cade.="</div>";
		}
		$cade.="</div>";
		echo($cade);
		?>
	</div>
	<?php
		$listDerechosReservados=ControladorFormularios::ctrListarDerechosReservados();
		foreach ($listDerechosReservados as $key => $value) {
			$anio=$value['anio'];
			$dominio=$value['dominio'];
			$url=$value['url'];
			if($_SESSION['lang']==='English'){
				$derechos=$value['derechos_eng'];
				$desarrollado=$value['desarrollado_eng'];
			}else if($_SESSION['lang']==='Français'){
				$derechos=$value['derechos_fra'];
				$desarrollado=$value['desarrollado_fra'];
			}else if($_SESSION['lang']==='Català'){
				$derechos=$value['derechos_cat'];
				$desarrollado=$value['desarrollado_cat'];
			}else{
				$derechos=$value['derechos_esp'];
				$desarrollado=$value['desarrollado_esp'];
			}
		}
	?>
	<div class="container">
		<div class="copyright">
			<div class="row">
				<div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
				Copyright  &copy;<?php echo($anio);?> <a class="border-bottom" href="./"><?php echo($dominio);?></a>, <?php echo($derechos);?>. 
				</div>
				<div class="col-md-6 text-center text-md-end">
					<div class="footer-menu">
						<?php echo($desarrollado);?>:<a class="border-bottom" href="<?php echo($url);?>" target="_blank"> Limbert Olmos M.</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>