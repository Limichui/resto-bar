<?php
include "models/config.php";
$idMenu=3;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <title>Robert's - Restaurante - Bar - Cafetería</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta name="author" content="Limbert Olmos Mercado"/>
    <meta name="keywords" content="robertsresto.com, Restaurante, Bar, Cafetería"/>
    <meta name="description" content="Portal web oficial del Restaurante Siete Gotas">
    <!-- Favicon -->
    <link href="<?php echo(SERVERURL);?>assets/img/logo-ico.png" rel="icon">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Libraries Stylesheet -->
    <link href="<?php echo(SERVERURL);?>assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?php echo(SERVERURL);?>assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo(SERVERURL);?>assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="<?php echo(SERVERURL);?>assets/lib/fontawesome-free-6.3.0/all.css" rel="stylesheet" />
    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo(SERVERURL);?>assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href="<?php echo(SERVERURL);?>assets/css/style.css" rel="stylesheet">
</head>
<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Cargando...</span>
            </div>
        </div>
        <!-- Spinner End -->
        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <!-- Navbar Start -->
            <?php include('fragments/header.php'); ?>
            <!-- Navbar End -->
            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Menú</h1>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->
        <!-- Menu Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h4 class="section-title ff-secondary text-center text-primary fw-normal">Menú Diario</h4>
                    <h1 class="mb-5"></h1>
                </div>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                    <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 pb-3 active" data-bs-toggle="pill" href="#tab-1">
                            <img width="35" height="35" src="<?php echo(SERVERURL);?>assets/img/iconos/plato-caliente.svg"></img>
                                <div class="ps-3">
                                    <h6 class="mt-n1 mb-0">Primeros Platos</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-2">
                                <img width="35" height="35" src="<?php echo(SERVERURL);?>assets/img/iconos/plato-frio.svg"></img>
                                <div class="ps-3">
                                    <h6 class="mt-n1 mb-0">Segundos Platos</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-3">
                            <img width="35" height="35" src="<?php echo(SERVERURL);?>assets/img/iconos/postre.svg"></img>
                                <div class="ps-3">
                                    <h6 class="mt-n1 mb-0">Postres</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-4">
                            <img width="35" height="35" src="<?php echo(SERVERURL);?>assets/img/iconos/botellas-vino.svg"></img>
                                <div class="ps-3">
                                    <h6 class="mt-n1 mb-0">Bodega</h6>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                <!-- Begin - Menú primeros platos -->
                                <?php
	                            $menu=ControladorFormularios::ctrListarProductosWeb(2,1);
                                $cade="";
                                foreach ($menu as $key => $value) {
                                    if($value['imagen']==""){
                                        $img="";
                                    }else{
                                        $img="<img class='flex-shrink-0 img-fluid rounded' src='".SERVERURL."assets/img/productos/".$value['imagen']."' alt='' style='width: 80px;'>";
                                    }
                                    $detalles=ControladorFormularios::ctrListarDetalleProductos($value['id']);
                                    $cadenaDetalle="";
                                    if($detalles){
                                        foreach ($detalles as $keyDetalle => $valueDetalle) {
                                            $cadenaDetalle.="<small class='fst-italic'><label class='text-primary'>".$valueDetalle['tipo_detalle_esp'].":</label> ".$valueDetalle['detalle_esp'].".</small>";      
                                        }
                                    }else{
                                        $cadenaDetalle.="<small class='fst-italic'></small>";      
                                    }
                                    $cade.="<div class='col-lg-6'>
                                                <div class='d-flex align-items-center'>".$img.
                                                    "<div class='w-100 d-flex flex-column text-start ps-4'>
                                                        <h6 class='d-flex justify-content-between border-bottom pb-2'>
                                                            <span>".$value['producto_esp']."</span>
                                                            <span class='text-primary'></span>
                                                        </h6>".$cadenaDetalle."
                                                    </div>
                                                </div>
                                            </div>";
                                }
                                echo($cade);
                                ?>
                                <!-- End - Menú primeros platos -->
                            </div>
                        </div>
                        <div id="tab-2" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <!-- Begin - Menú segundos platos -->
                                <?php
	                            $menu=ControladorFormularios::ctrListarProductosWeb(2,2);
                                $cade="";
                                foreach ($menu as $key => $value) {
                                    if($value['imagen']==""){
                                        $img="";
                                    }else{
                                        $img="<img class='flex-shrink-0 img-fluid rounded' src='".SERVERURL."assets/img/productos/".$value['imagen']."' alt='' style='width: 80px;'>";
                                    }
                                    $detalles=ControladorFormularios::ctrListarDetalleProductos($value['id']);
                                    $cadenaDetalle="";
                                    if($detalles){
                                        foreach ($detalles as $keyDetalle => $valueDetalle) {
                                            $cadenaDetalle.="<small class='fst-italic'><label class='text-primary'>".$valueDetalle['tipo_detalle_esp'].":</label> ".$valueDetalle['detalle_esp'].".</small>";      
                                        }
                                    }else{
                                        $cadenaDetalle.="<small class='fst-italic'></small>";      
                                    }
                                    $cade.="<div class='col-lg-6'>
                                                <div class='d-flex align-items-center'>".$img.
                                                    "<div class='w-100 d-flex flex-column text-start ps-4'>
                                                        <h6 class='d-flex justify-content-between border-bottom pb-2'>
                                                            <span>".$value['producto_esp']."</span>
                                                            <span class='text-primary'></span>
                                                        </h6>".$cadenaDetalle."
                                                    </div>
                                                </div>
                                            </div>";
                                }
                                echo($cade);
                                ?>
                                <!-- End - Menú degundos platos -->
                            </div>
                        </div>
                        <div id="tab-3" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <!-- Begin - Menú postres -->
                                <?php
	                            $menu=ControladorFormularios::ctrListarProductosWeb(2,3);
                                $cade="";
                                foreach ($menu as $key => $value) {
                                    if($value['imagen']==""){
                                        $img="";
                                    }else{
                                        $img="<img class='flex-shrink-0 img-fluid rounded' src='".SERVERURL."assets/img/productos/".$value['imagen']."' alt='' style='width: 80px;'>";
                                    }
                                    $detalles=ControladorFormularios::ctrListarDetalleProductos($value['id']);
                                    $cadenaDetalle="";
                                    if($detalles){
                                        foreach ($detalles as $keyDetalle => $valueDetalle) {
                                            $cadenaDetalle.="<small class='fst-italic'><label class='text-primary'>".$valueDetalle['tipo_detalle_esp'].":</label> ".$valueDetalle['detalle_esp'].".</small>";      
                                        }
                                    }else{
                                        $cadenaDetalle.="<small class='fst-italic'></small>";      
                                    }
                                    $cade.="<div class='col-lg-6'>
                                                <div class='d-flex align-items-center'>".$img.
                                                    "<div class='w-100 d-flex flex-column text-start ps-4'>
                                                        <h6 class='d-flex justify-content-between border-bottom pb-2'>
                                                            <span>".$value['producto_esp']."</span>
                                                            <span class='text-primary'></span>
                                                        </h6>".$cadenaDetalle."
                                                    </div>
                                                </div>
                                            </div>";
                                }
                                echo($cade);
                                ?>
                                <!-- End - Menú postres -->
                            </div>
                        </div>
                        <div id="tab-4" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <!-- Begin - Menú bodega -->
                                <?php
	                            $menu=ControladorFormularios::ctrListarProductosWeb(2,4);
                                $cade="";
                                foreach ($menu as $key => $value) {
                                    if($value['imagen']==""){
                                        $img="";
                                    }else{
                                        $img="<img class='flex-shrink-0 img-fluid rounded' src='".SERVERURL."assets/img/productos/".$value['imagen']."' alt='' style='width: 80px;'>";
                                    }
                                    $detalles=ControladorFormularios::ctrListarDetalleProductos($value['id']);
                                    $cadenaDetalle="";
                                    if($detalles){
                                        foreach ($detalles as $keyDetalle => $valueDetalle) {
                                            $cadenaDetalle.="<small class='fst-italic'><label class='text-primary'>".$valueDetalle['tipo_detalle_esp'].":</label> ".$valueDetalle['detalle_esp'].".</small>";      
                                        }
                                    }else{
                                        $cadenaDetalle.="<small class='fst-italic'></small>";      
                                    }
                                    $cade.="<div class='col-lg-6'>
                                                <div class='d-flex align-items-center'>".$img.
                                                    "<div class='w-100 d-flex flex-column text-start ps-4'>
                                                        <h6 class='d-flex justify-content-between border-bottom pb-2'>
                                                            <span>".$value['producto_esp']."</span>
                                                            <span class='text-primary'></span>
                                                        </h6>".$cadenaDetalle."
                                                    </div>
                                                </div>
                                            </div>";
                                }
                                echo($cade);
                                ?>
                                <!-- End - Menú bodega -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Start -->
        <!-- Menu Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h4 class="section-title ff-secondary text-center text-primary fw-normal">Menú Infantil</h4>
                    <h1 class="mb-5"></h1>
                </div>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                    <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 pb-3 active" data-bs-toggle="pill" href="#tabInf-1">
                            <img width="35" height="35" src="<?php echo(SERVERURL);?>assets/img/iconos/plato-caliente.svg"></img>
                                <div class="ps-3">
                                    <h6 class="mt-n1 mb-0">Platos Pricipales</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tabInf-2">
                                <img width="35" height="35" src="<?php echo(SERVERURL);?>assets/img/iconos/bebida.svg"></img>
                                <div class="ps-3">
                                    <h6 class="mt-n1 mb-0">Bebidas</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tabInf-3">
                            <img width="35" height="35" src="<?php echo(SERVERURL);?>assets/img/iconos/postre.svg"></img>
                                <div class="ps-3">
                                    <h6 class="mt-n1 mb-0">Postres</h6>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="tabInf-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                <!-- Begin - Menú bodega -->
                                <?php
	                            $menu=ControladorFormularios::ctrListarProductosWeb(3,1);
                                $cade="";
                                foreach ($menu as $key => $value) {
                                    if($value['imagen']==""){
                                        $img="";
                                    }else{
                                        $img="<img class='flex-shrink-0 img-fluid rounded' src='".SERVERURL."assets/img/productos/".$value['imagen']."' alt='' style='width: 80px;'>";
                                    }
                                    $detalles=ControladorFormularios::ctrListarDetalleProductos($value['id']);
                                    $cadenaDetalle="";
                                    if($detalles){
                                        foreach ($detalles as $keyDetalle => $valueDetalle) {
                                            $cadenaDetalle.="<small class='fst-italic'><label class='text-primary'>".$valueDetalle['tipo_detalle_esp'].":</label> ".$valueDetalle['detalle_esp'].".</small>";      
                                        }
                                    }else{
                                        $cadenaDetalle.="<small class='fst-italic'></small>";      
                                    }
                                    $cade.="<div class='col-lg-6'>
                                                <div class='d-flex align-items-center'>".$img.
                                                    "<div class='w-100 d-flex flex-column text-start ps-4'>
                                                        <h6 class='d-flex justify-content-between border-bottom pb-2'>
                                                            <span>".$value['producto_esp']."</span>
                                                            <span class='text-primary'></span>
                                                        </h6>".$cadenaDetalle."
                                                    </div>
                                                </div>
                                            </div>";
                                }
                                echo($cade);
                                ?>
                                <!-- End - Menú bodega -->
                            </div>
                        </div>
                        <div id="tabInf-2" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <!-- Begin - Menú refrescos -->
                                <?php
	                            $menu=ControladorFormularios::ctrListarProductosWeb(3,2);
                                $cade="";
                                foreach ($menu as $key => $value) {
                                    if($value['imagen']==""){
                                        $img="";
                                    }else{
                                        $img="<img class='flex-shrink-0 img-fluid rounded' src='".SERVERURL."assets/img/productos/".$value['imagen']."' alt='' style='width: 80px;'>";
                                    }
                                    $detalles=ControladorFormularios::ctrListarDetalleProductos($value['id']);
                                    $cadenaDetalle="";
                                    if($detalles){
                                        foreach ($detalles as $keyDetalle => $valueDetalle) {
                                            $cadenaDetalle.="<small class='fst-italic'><label class='text-primary'>".$valueDetalle['tipo_detalle_esp'].":</label> ".$valueDetalle['detalle_esp'].".</small>";      
                                        }
                                    }else{
                                        $cadenaDetalle.="<small class='fst-italic'></small>";      
                                    }
                                    $cade.="<div class='col-lg-6'>
                                                <div class='d-flex align-items-center'>".$img.
                                                    "<div class='w-100 d-flex flex-column text-start ps-4'>
                                                        <h6 class='d-flex justify-content-between border-bottom pb-2'>
                                                            <span>".$value['producto_esp']."</span>
                                                            <span class='text-primary'></span>
                                                        </h6>".$cadenaDetalle."
                                                    </div>
                                                </div>
                                            </div>";
                                }
                                echo($cade);
                                ?>
                                <!-- End - Menú refrescos -->
                            </div>
                        </div>
                        <div id="tabInf-3" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <!-- Begin - Menú postres -->
                                <?php
	                            $menu=ControladorFormularios::ctrListarProductosWeb(3,3);
                                $cade="";
                                foreach ($menu as $key => $value) {
                                    if($value['imagen']==""){
                                        $img="";
                                    }else{
                                        $img="<img class='flex-shrink-0 img-fluid rounded' src='".SERVERURL."assets/img/productos/".$value['imagen']."' alt='' style='width: 80px;'>";
                                    }
                                    $detalles=ControladorFormularios::ctrListarDetalleProductos($value['id']);
                                    $cadenaDetalle="";
                                    if($detalles){
                                        foreach ($detalles as $keyDetalle => $valueDetalle) {
                                            $cadenaDetalle.="<small class='fst-italic'><label class='text-primary'>".$valueDetalle['tipo_detalle_esp'].":</label> ".$valueDetalle['detalle_esp'].".</small>";      
                                        }
                                    }else{
                                        $cadenaDetalle.="<small class='fst-italic'></small>";      
                                    }
                                    $cade.="<div class='col-lg-6'>
                                                <div class='d-flex align-items-center'>".$img.
                                                    "<div class='w-100 d-flex flex-column text-start ps-4'>
                                                        <h6 class='d-flex justify-content-between border-bottom pb-2'>
                                                            <span>".$value['producto_esp']."</span>
                                                            <span class='text-primary'></span>
                                                        </h6>".$cadenaDetalle."
                                                    </div>
                                                </div>
                                            </div>";
                                }
                                echo($cade);
                                ?>
                                <!-- End - Menú postres -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Start -->
        <?php include('fragments/footer.php'); ?>
        <!-- Footer End -->
        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo(SERVERURL);?>assets/lib/wow/wow.min.js"></script>
    <script src="<?php echo(SERVERURL);?>assets/lib/easing/easing.min.js"></script>
    <script src="<?php echo(SERVERURL);?>assets/lib/waypoints/waypoints.min.js"></script>
    <script src="<?php echo(SERVERURL);?>assets/lib/counterup/counterup.min.js"></script>
    <script src="<?php echo(SERVERURL);?>assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?php echo(SERVERURL);?>assets/lib/tempusdominus/js/moment.min.js"></script>
    <script src="<?php echo(SERVERURL);?>assets/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="<?php echo(SERVERURL);?>assets/lib/fontawesome-free-6.3.0/all.js"></script>
    <!-- Template Javascript -->
    <script src="<?php echo(SERVERURL);?>assets/js/main.js"></script>
</body>

</html>