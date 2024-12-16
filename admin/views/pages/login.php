<?php
//if(!session_id()) session_start();
include "../models/config.php";
if(isset($_SESSION["idUsu"])){
    echo "<script>window.location='?accion=main';</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Robert's - Login</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Limbert Olmos Mercado"/>
    <meta name="description" content="Panel de Administración del Portal Web">
    <!-- Favicon -->
    <link href="<?php echo(SERVERURL);?>assets/img/logo-ico.png" rel="icon">
    <title>Robert's - Login</title>
    <!-- Custom fonts for this template-->
    <link href="<?php echo(SERVERURL);?>admin/assets/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="<?php echo(SERVERURL);?>admin/assets/sb-admin-2/sb-admin-2.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-4 col-lg-4 col-md-4">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <!--div class="col-lg-6 d-none d-lg-block bg-login-image"></!div-->
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">INICIO DE SESIÓN</h1>
                                    </div>
                                    <form class="user" id="form-login-user" method="post">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                name="txtUser" id="txtUser" placeholder="Usuario">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                name="txtPassword" id="txtPassword" placeholder="Password">
                                        </div>
                                        <div id="from-message" class="text-danger mb-3" style="font-size:small"></div>
                                        <button id="btnIngresar" class="btn btn-primary btn-user btn-block" type="submit">Ingresar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo(SERVERURL);?>admin/assets/jquery/jquery.min.js"></script>
    <script src="<?php echo(SERVERURL);?>admin/assets/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo(SERVERURL);?>admin/assets/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo(SERVERURL);?>admin/assets/sb-admin-2/sb-admin-2.min.js"></script>
    <script src="<?php echo(SERVERURL);?>admin/assets/js/login-main.js"></script>

</body>

</html>