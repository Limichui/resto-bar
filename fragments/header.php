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
	$cade.= "</div></div>";
	/*
	$cade.="<div class='nav-item dropdown'>
				<a href='#' class='nav-link dropdown-toggle'  id='languageDropdown' data-bs-toggle='dropdown'>
					<img src='assets/img/flags/es.png' alt='Español'> Español
				</a>
				<div class='dropdown-menu m-0' id='languageMenu' aria-labelledby='languageDropdown'>
					<a class='dropdown-item' href='#' data-language='Español' data-flag='https://flagcdn.com/w40/es.png'>
						<img src='assets/img/flags/es.png' alt='Español'> Español
					</a>
					<a class='dropdown-item' href='#' data-language='English' data-flag='https://flagcdn.com/w40/gb.png'>
						<img src='assets/img/flags/gb.png' alt='English'> English
					</a>
					<a class='dropdown-item' href='#' data-language='Français' data-flag='https://flagcdn.com/w40/fr.png'>
						<img src='assets/img/flags/fr.png' alt='Français'> Français
					</a>
					<a class='dropdown-item' href='#' data-language='Català' data-flag='https://flagcdn.com/w40/ad.png'>
						<img src='assets/img/flags/ad.png' alt='Català'> Català
					</a>
				</div>
			</div>";*/
	$cade.= "</div></div>";
	echo($cade);
	?>
</nav>