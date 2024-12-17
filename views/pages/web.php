<?php
include "models/config.php";
$idMenu = 1;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Robert's - Restaurante - Bar - Cafetería</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="author" content="Limbert Olmos Mercado" />
    <meta name="keywords" content="robertsresto.com, Restaurante, Bar, Cafetería" />
    <meta name="description" content="Portal web oficial del Restaurante Robert's">
    <!-- Favicon -->
    <link href="<?php echo (SERVERURL); ?>assets/img/logo-ico.png" rel="icon">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Libraries Stylesheet -->
    <link href="<?php echo (SERVERURL); ?>assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?php echo (SERVERURL); ?>assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo (SERVERURL); ?>assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo (SERVERURL); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href="<?php echo (SERVERURL); ?>assets/css/style.css" rel="stylesheet">

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
                <div class="container my-5 py-5">
                    <div class="row align-items-center g-5">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="display-3 text-white animated slideInLeft">¡Comparte junto a tu familia del mejor sabor tradicional!</h1>
                            <p class="text-white animated slideInLeft mb-4 pb-2">Ven y degusta de nuestros deliciosos platos especiales, atendemos todo tipo de eventos, contáctate con nosotros y elige la mejor opción dentro de nuestra gran variedad en el menú Robert's.</p>
                        </div>
                        <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                            <img class="img-fluid" src="<?php echo (SERVERURL); ?>assets/img/hero.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->
        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="<?php echo (SERVERURL); ?>assets/img/about-1.jpg">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="<?php echo (SERVERURL); ?>assets/img/about-2.jpg" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="<?php echo (SERVERURL); ?>assets/img/about-3.jpg">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="<?php echo (SERVERURL); ?>assets/img/about-4.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">Sobre Nosotros</h5>
                        <h1 class="mb-4">Bienvenido a Robert's</h1>
                        <p class="mb-4">
                            Durante todos estos años, gracias al esfuerzo e ilusión, hemos ido evolucionando y profesionalizándonos hasta convertirnos en un referente del sector de la gastronomía. Siempre marcado por nuestro servicio y el buen sabor de muestras comídas.
                        </p>
                        <p class="mb-4">
                            Desde aquí queremos agradecer la confianza que durante tanto tiempo han depositado nuestros comensales en nosotros.
                        </p>
                        <p class="mb-4">
                            ¡Te esperamos!
                        </p>
                        <p>

                        </p>
                        <div class="row g-4 mb-4">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                    <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">15</h1>
                                    <div class="ps-4">
                                        <p class="mb-0">Años de</p>
                                        <h6 class="text-uppercase mb-0">Experiencia</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--a class="btn btn-primary py-3 px-5 mt-2" href="">Read More</a-->
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
        <!-- Testimonial Start -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="text-center">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Testimonial</h5>
                    <h1 class="mb-5">Nuestros clientes dicen !!!</h1>
                </div>
                <div class="owl-carousel testimonial-carousel">
                    <?php
                    $testimonios = ControladorFormularios::ctrListarTestimonios();
                    $cade = "";
                    foreach ($testimonios as $key => $value) {
                        $cade .= "<div class='testimonial-item bg-transparent border rounded p-4'>
                                        <i class='fa fa-quote-left fa-2x text-primary mb-3'></i>";
                        $cade .= "<p>" . $value['comentario'] . "</p>
                                <div class='d-flex align-items-center'>
                                    <img class='img-fluid flex-shrink-0 rounded-circle' src='" . SERVERURL . "assets/img/testimonios/" . $value['avatar'] . "' style='width: 50px; height: 50px;'>
                                    <div class='ps-3'>
                                        <h5 class='mb-1'>" . $value['nombre'] . "</h5>
                                    </div>
                                </div>
                            </div>";
                    }
                    echo ($cade);
                    ?>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
        <!-- Footer Start -->
        <?php include('fragments/footer.php'); ?>
        <!-- Footer End -->
        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo (SERVERURL); ?>assets/lib/wow/wow.min.js"></script>
    <script src="<?php echo (SERVERURL); ?>assets/lib/easing/easing.min.js"></script>
    <script src="<?php echo (SERVERURL); ?>assets/lib/waypoints/waypoints.min.js"></script>
    <script src="<?php echo (SERVERURL); ?>assets/lib/counterup/counterup.min.js"></script>
    <script src="<?php echo (SERVERURL); ?>assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?php echo (SERVERURL); ?>assets/lib/tempusdominus/js/moment.min.js"></script>
    <script src="<?php echo (SERVERURL); ?>assets/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="<?php echo (SERVERURL); ?>assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="<?php echo (SERVERURL); ?>assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Template Javascript -->
    <script src="<?php echo (SERVERURL); ?>assets/js/languages.js"></script>
    <script src="<?php echo (SERVERURL); ?>assets/js/main.js"></script>

</body>

</html>