<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
	<a href="./" class="navbar-brand p-0">
		<img src="assets/img/logo.png" alt="Logotipo" /> 
	</a>
	<div class="col-lg-4 col-md-6">
		<div class="d-flex pt-2">
			<a class="btn btn-outline-light btn-social" target="_blank" style="margin-right: 5px; margin-top: -20px; width: 30px; height: 30px; display: flex; align-items: center; justify-content: center; border: 1px solid #FFFFFF; border-radius: 35px; transition: .3s;" href="https://www.instagram.com/robertrestobar?igsh=eXc0cmRzemZhZG90&utm_source=qr">
				<i class="fab fa-instagram"></i>
			</a>
			<!--a class="btn btn-outline-light btn-social" target="_blank" style="margin-top: -20px; width: 30px; height: 30px; display: flex; align-items: center; justify-content: center; border: 1px solid #FFFFFF; border-radius: 35px; transition: .3s;" href="https://www.facebook.com/profile.php?id=100084383828320">
				<i class="fab fa-facebook-f"></i>
			</a-->
		</div>
	</div>
	<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
		<span class="fa fa-bars"></span>
	</button>
	<?php
	$menu=ControladorFormularios::ctrListarMenu();
	$cade = "<div class='collapse navbar-collapse' id='navbarCollapse'>
				<div class='navbar-nav ms-auto py-0 pe-4'>";
	foreach ($menu as $key => $value) {
		if($value['id']==$idMenu){
			$cade.="<a href='".$value['link']."' class='nav-item nav-link active'>".$value['opcion']."</a>";
		}else{
			$cade.="<a href='".$value['link']."' class='nav-item nav-link'>".$value['opcion']."</a>";
		}
	}
	$cade.= "</div></div>";
	echo($cade);
	?>
</nav>