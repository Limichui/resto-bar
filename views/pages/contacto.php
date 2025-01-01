<?php
include "models/config.php";
$idMenu=6;
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
    <style>
    .error-message {
        margin-top: 5px;
        font-size: 0.9em;
        color: red;
    }
    </style>
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
        </div>
        <!-- Navbar & Hero End -->
        <!-- Contact Start -->
        <?php
        $subtitulos = ControladorFormularios::ctrListarSubTitulos($idMenu);
        foreach ($subtitulos as $key => $value) {
                if($_SESSION['lang']==='English') $subtitulo=$value['subtitulo_eng'];
                else if($_SESSION['lang']==='Français') $subtitulo=$value['subtitulo_fra'];
                else if($_SESSION['lang']==='Català') $subtitulo=$value['subtitulo_cat'];
                else $subtitulo=$value['subtitulo_esp'];
        }
        ?>
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal"><?php echo($subtitulo);?></h5>
                    <h1 class="mb-5"></h1>
                </div>
                <div class="row g-4">
                    <div class="col-12">
                        <div class="row gy-4">
                        <?php
                            $cade="";
                            $datosContacto = ControladorFormularios::ctrFiltrarDatosContacto(1);
                            foreach ($datosContacto as $key => $value) {
                                if($_SESSION['lang']==='English'){
                                    $titulo=$value['titulo_eng'];
                                    $icono=$value['detalle1_eng'];
                                    $detalle=$value['detalle2_eng'];
                                }else if($_SESSION['lang']==='Français'){
                                    $titulo=$value['titulo_fra'];
                                    $icono=$value['detalle1_fra'];
                                    $detalle=$value['detalle2_fra'];
                                }else if($_SESSION['lang']==='Català'){
                                    $titulo=$value['titulo_cat'];
                                    $icono=$value['detalle1_cat'];
                                    $detalle=$value['detalle2_cat'];
                                }else{
                                    $titulo=$value['titulo_esp'];
                                    $icono=$value['detalle1_esp'];
                                    $detalle=$value['detalle2_esp'];
                                }
                                $cade.="<div class='col-md-4'>
                                            <h5 class='section-title ff-secondary fw-normal text-start text-primary'>".$titulo."</h5>
                                            <p><i class='".$icono."'></i>".$detalle."</p>
                                        </div>";
                            }
                            echo($cade);
                            ?>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
                        <iframe class="position-relative rounded w-100 h-100"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2993.860419313778!2d2.1191690149268503!3d41.377117204595535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a498f40e975387%3A0xfb0aef32fd76db8a!2sRobert&#39;s!5e0!3m2!1ses!2sbo!4v1680551844377!5m2!1ses!2sbo"
                            frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"
                            tabindex="0"></iframe>
                            
                    </div>
                    <?php
                    if($_SESSION['lang']==='English'){
                        $msgError=array(
                            'nombre' => "The name is mandatory.",
                            'email1' => "The email is mandatory.",
                            'email2' => "The email is not in a valid format.",
                            'asunto' => "The subject is mandatory.",
                            'mensaje' => "The message is mandatory.",
                            'confirmacion' => "Registration completed.",
                            'error' => "An error occurred, please try again."
                        );
                    }else if($_SESSION['lang']==='Français'){
                        $msgError=array(
                            'nombre' => "Le nom est obligatoire.",
                            'email1' => "L'email est obligatoire.",
                            'email2' => "L'email n'a pas un format valide.",
                            'asunto' => "L'objet est obligatoire.",
                            'mensaje' => "Le message est obligatoire.",
                            'confirmacion' => "Inscription terminée.",
                            'error' => "Une erreur s'est produite, veuillez réessayer."
                        );
                    }else if($_SESSION['lang']==='Català'){
                        $msgError=array(
                            'nombre' => "El nom és obligatori.",
                            'email1' => "El correu electrònic és obligatori.",
                            'email2' => "El correu electrònic no té un format vàlid.",
                            'asunto' => "L'assumpte és obligatori.",
                            'mensaje' => "El missatge és obligatori.",
                            'confirmacion' => "Registre completat.",
                            'error' => "Ha ocorregut un error, torneu-ho a intentar."
                        );
                    }else{
                        $msgError=array(
                            'nombre' => "El nombre es obligatorio.",
                            'email1' => "El email es obligatorio.",
                            'email2' => "El email no tiene un formato válido.",
                            'asunto' => "El asunto es obligatorio.",
                            'mensaje' => "El mensaje es obligatorio.",
                            'confirmacion' => "Registro completado.",
                            'error' => "Ocurrió un error, vuelva a intentarlo."
                        );
                    }
                    $dataAttribute = htmlspecialchars(json_encode($msgError), ENT_QUOTES, 'UTF-8');

                    $etiquetasFromLabel = ControladorFormularios::ctrFiltrarLabelFromContacto();
                    foreach ($etiquetasFromLabel as $key => $value) {
                        if($_SESSION['lang']==='English'){
                            $nombre=$value['nombre_eng'];
                            $email=$value['email_eng'];
                            $asunto=$value['asunto_eng'];
                            $mensaje=$value['mensaje_eng'];
                            $boton=$value['boton_eng'];
                        }else if($_SESSION['lang']==='Français'){
                            $nombre=$value['nombre_fra'];
                            $email=$value['email_fra'];
                            $asunto=$value['asunto_fra'];
                            $mensaje=$value['mensaje_fra'];
                            $boton=$value['boton_fra'];
                        }else if($_SESSION['lang']==='Català'){
                            $nombre=$value['nombre_cat'];
                            $email=$value['email_cat'];
                            $asunto=$value['asunto_cat'];
                            $mensaje=$value['mensaje_cat'];
                            $boton=$value['boton_cat'];
                        }else{
                            $nombre=$value['nombre_esp'];
                            $email=$value['email_esp'];
                            $asunto=$value['asunto_esp'];
                            $mensaje=$value['mensaje_esp'];
                            $boton=$value['boton_esp'];
                        }
                    }
                    ?>
                    <div class="col-md-6">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <form id="mensaje_web_insert_form" method="post">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="msgNombre" name="msgNombre" placeholder="<?php echo($nombre);?>" style="text-transform:uppercase" required>
                                            <label for="msgNombre"><?php echo($nombre);?></label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="msgEmail" name="msgEmail" placeholder="<?php echo($email);?>" style="text-transform:lowercase" required>
                                            <label for="msgEmail"><?php echo($email);?></label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="msgAsunto" name="msgAsunto" placeholder="<?php echo($asunto);?>" style="text-transform:uppercase" required>
                                            <label for="msgAsunto"><?php echo($asunto);?></label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="<?php echo($mensaje);?>" id="msgMensaje" name="msgMensaje" style="height: 150px" required></textarea>
                                            <label for="message"><?php echo($mensaje);?></label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit" id="mensaje_web_insert_button_submit" data-msg-error='<?php echo $dataAttribute; ?>'><?php echo($boton);?></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->
        <!-- Modal Start-->
        <div class="modal fade" id="messageModal" tabindex="-1" role="dialog" aria-labelledby="messageModalTitle" aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-body" id="messageModalBody"></div>
                </div>
            </div>
        </div>
        <!-- Modal End -->
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
    <script src="<?php echo(SERVERURL);?>assets/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="<?php echo(SERVERURL);?>assets/lib/fontawesome-free-6.3.0/all.js"></script>
    <!-- Template Javascript -->
    <script src="<?php echo (SERVERURL); ?>assets/js/languages.js"></script>
    <script src="<?php echo(SERVERURL);?>assets/js/main.js"></script>
                    <!-- Template Javascript -->
    <script src="<?php echo(SERVERURL);?>assets/js/insert-mensaje-web.js"></script>
</body>

</html>