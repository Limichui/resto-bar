<?php
if(!session_id()) session_start();
if(!isset($_SESSION["idUsu"])){
    echo "<script>window.location='?accion=login';</script>";
}
include "../models/config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Limbert Olmos Mercado"/>
    <meta name="description" content="Panel de Administración del Portal Web">
    <!-- Favicon -->
    <link href="<?php echo(SERVERURL);?>assets/img/logo-ico.png" rel="icon">
    <title>Robert's - Administración</title>
    <!-- Custom fonts for this template-->
    <link href="<?php echo(SERVERURL);?>admin/assets/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="<?php echo(SERVERURL);?>admin/assets/sb-admin-2/sb-admin-2.css" rel="stylesheet">
</head>
<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="./">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-tachometer-alt"></i>
                </div>
                <div class="sidebar-brand-text mx-2">Administración</div>
            </a>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Heading -->
            <div class="sidebar-heading">
                Items
            </div>
            <!-- Nav Item - Breakfasts -->
            <li class="nav-item">
                <a class="nav-link" href="?accion=breakfasts">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Desayunos</span></a>
            </li>
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link" href="" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
                    aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Menú</span>
                </a>
                <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item " href="?accion=daily-menu">Menú Diario</a>
                        <a class="collapse-item active" href="">Menú Infantil</a>
                    </div>
                </div>
            </li>
            <!-- Nav Item - Pages Carte-->
            <li class="nav-item">
                <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapseThree"
                    aria-expanded="true" aria-controls="collapseThree">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Carta</span>
                </a>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="?accion=entrance">Entradas</a>
                        <a class="collapse-item" href="?accion=dishes">Platos</a>
                        <a class="collapse-item" href="?accion=specials">Especiales</a>
                    </div>
                </div>
            </li>
            <!-- Nav Item - Cócteles -->
            <li class="nav-item">
                <a class="nav-link" href="?accion=cocktails">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Cócteles</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Header -->
                <?php include('fragments/header.php'); ?>
                <!-- End of header -->
                <!-- Begin Page Content -->
                <div id="container-main" class="container-fluid">
                    <!-- Header -->
                    <?php include('fragments/childrens-menu-detail.php'); ?>
                    <!-- End of header -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
            <!-- Footer -->
            <?php include('fragments/footer.php'); ?>
            <!-- End of Footer -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <input type="hidden" class="form-control form-control-user" id="page" name="page" value="childrens-menu">
    <!-- Logout Modal-->
    <?php include('fragments/modals/logout-modal.php'); ?>
    <!--Begin Insert Product Modal-->
    <?php include('fragments/modals/product-insert-modal.php'); ?>
    <!--Begin Update Product Modal-->
    <?php include('fragments/modals/product-update-modal.php'); ?>
    <!--Begin Delete Product Modal-->
    <?php include('fragments/modals/product-delete-modal.php'); ?>
    <!--Begin Update Image Modal-->
    <?php include('fragments/modals/image-update-modal.php'); ?>
    <!--Begin Update Details Modal-->
    <?php include('fragments/modals/details-update-modal.php'); ?>
    <!--Begin Insert Details Modal-->
    <?php include('fragments/modals/details-insert-modal.php'); ?>
    <!--Begin Delete Details Modal-->
    <?php include('fragments/modals/details-delete-modal.php'); ?>
    <!-- Begin Message Modal-->
    <?php include('fragments/modals/message-modal.php'); ?>
    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo(SERVERURL);?>admin/assets/jquery/jquery.min.js"></script>
    <script src="<?php echo(SERVERURL);?>admin/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo(SERVERURL);?>admin/assets/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?php echo(SERVERURL);?>admin/assets/sb-admin-2/sb-admin-2.min.js"></script>
    <script src="<?php echo(SERVERURL);?>admin/assets/js/functions.js"></script>
    <script src="<?php echo(SERVERURL);?>admin/assets/js/insert-product.js"></script>
    <script src="<?php echo(SERVERURL);?>admin/assets/js/update-product.js"></script>
    <script src="<?php echo(SERVERURL);?>admin/assets/js/delete-product.js"></script>
    <script src="<?php echo(SERVERURL);?>admin/assets/js/update-image.js"></script>
    <script src="<?php echo(SERVERURL);?>admin/assets/js/update-details-product.js"></script>
</body>
</html>