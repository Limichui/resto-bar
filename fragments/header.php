<?php
//session_destroy();
?>
<input class="session" type="text" id="txt-lang" value="<?php echo($_SESSION['lang']);?>">
<input class="session" type="text" id="txt-flag" value="<?php echo($_SESSION['flag']);?>">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
	<a href="./" class="navbar-brand p-0">
		<img src="assets/img/logo.png" alt="Logotipo" /> 
	</a>
	<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
		<span class="fa fa-bars"></span>
	</button>
	<?php
	$menu=ControladorFormularios::ctrListarMenu();
	$cade = "<div class='collapse navbar-collapse' id='navbarCollapse'>
				<div class='navbar-nav ms-auto py-0 pe-4'>";
	foreach ($menu as $key => $value) {
		if($_SESSION['lang']==='English') $opcion=$value['opcion_eng'];
		else if($_SESSION['lang']==='Français') $opcion=$value['opcion_fra'];
		else if($_SESSION['lang']==='Català') $opcion=$value['opcion_cat'];
		else $opcion=$value['opcion_esp'];
		if($value['id']==$idMenu){
			$cade.="<a href='".$value['link']."' class='nav-item nav-link active'>".$opcion."</a>";
		}else{
			$cade.="<a href='".$value['link']."' class='nav-item nav-link'>".$opcion."</a>";
		}
	}
	$idiomas=ControladorFormularios::ctrListarIdiomas();
	$flag = 0;
	$cade.="<div class='nav-item dropdown'>";
	foreach ($idiomas as $key => $value) {
		if($flag==0){
			$cade.="<a href='#' class='nav-link dropdown-toggle'  id='languageDropdown' data-bs-toggle='dropdown'>
					<img src='".$_SESSION['flag']."' alt='".$value['idioma']."'> ".$value['idioma']."
				</a>
				<div class='dropdown-menu m-0' id='languageMenu' aria-labelledby='languageDropdown'>";
		}
		$cade .= "<a class='dropdown-item' href='#' data-language='".$value['idioma']."' data-flag='assets/img/flags/".$value['imagen']."'>
                <img src='assets/img/flags/".$value['imagen']."' alt='".$value['idioma']."'> ".$value['idioma']."
            </a>";
		$flag++;
	}
	$cade.= "</div></div></div></div>";
	echo($cade);
	?>
</nav>
<?php
$cade="<div class='container-xxl py-5 bg-dark hero-header mb-5'>";
$cabecera=ControladorFormularios::ctrFiltrarInicioCabecera($idMenu);
foreach ($cabecera as $key => $value) {
	if($_SESSION['lang']==='English'){
		$titulo=$value['titulo_eng'];
		$parrafo=$value['parrafo_eng'];
	}else if($_SESSION['lang']==='Français'){
		$titulo=$value['titulo_fra'];
		$parrafo=$value['parrafo_fra'];
	}else if($_SESSION['lang']==='Català'){
		$titulo=$value['titulo_cat'];
		$parrafo=$value['parrafo_cat'];
	}else{
		$titulo=$value['titulo_esp'];
		$parrafo=$value['parrafo_esp'];
	}
	if($idMenu===1){
		$cade.="<div class='container my-5 py-5'>
					<div class='row align-items-center g-5'>
						<div class='col-lg-6 text-center text-lg-start'>
							<h1 class='display-3 text-white animated slideInLeft'>".$titulo."</h1>
							<p class='text-white animated slideInLeft mb-4 pb-2'>".$parrafo."</p>
						</div>
						<div class='col-lg-6 text-center text-lg-end overflow-hidden'>
							<img class='img-fluid' src='".SERVERURL."assets/img/hero.png' alt=''>
						</div>
					</div>
				</div>";
	}else{
		$cade.="<div class='container-xxl py-5 bg-dark hero-header mb-5'>
					<div class='container text-center my-5 pt-5 pb-4'>
						<h1 class='display-3 text-white mb-3 animated slideInDown'>".$titulo."</h1>
					</div>
				</div>";
	}
}
$cade.="</div>";
echo($cade);
?>

