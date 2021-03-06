<?php
session_start();
if(empty($_SESSION['s_usuario'])){
    header("Location:../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Sistema para el control de registros en la junta de agua Salcedo">
    <meta name="author" content="Brayan Chiluisa, Adriana Casa">

    <title>Junta de Agua | Rural</title>

    <!-- Custom fonts for this template-->
    <link href="../public/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../public/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../public/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../public/toast/toastr.min.css">
    <link rel="stylesheet" href="../public/sweetalert2/sweetalert2.min.css">
    <link rel="stylesheet" href="../public/css/select2.min.css">
    <link rel="stylesheet" href="../public/datepicker/clockpicker.css">


</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../View/home.php">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Panel Admin.</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="../View/home.php">
                <i class="fas fa-fw fa-home"></i>
                <span>Inicio</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->


        <!--Inicio Navegación Gestión-->
        <li class="nav-item">
            <a class="nav-link collapsed" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">
                <i class="fas fa-fw fa-list-ol"></i>
                <span>Gestión</span>
            </a>
            <div id="multiCollapseExample1" class="collapse" aria-labelledby="headingTwo" data-parent="">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="usuarios.php">
                        <i class="fas fa-fw fa-users"></i>
                        Usuarios
                    </a>
                    <a class="collapse-item" href="ovalos.php">
                        <i class="fas fa-fw fa-square"></i>
                        Ovalos
                    </a>
                    <a class="collapse-item" href="clientes.php">
                        <i class="fas fa-fw fa-users"></i>
                        Clientes
                    </a>
                    <a class="collapse-item" href="lotes.php">
                        <i class="fas fa-fw fa-building"></i>
                        Lotes
                    </a>
                    <a class="collapse-item" href="hriego.php">
                        <i class="fas fa-fw fa-calendar-alt"></i>
                        Horarios de Riego
                    </a>
                    <a class="collapse-item" href="parametros.php">
                        <i class="fas fa-fw fa-toolbox"></i>
                        Parametros
                    </a>
                    <a class="collapse-item" href="gastos.php">
                        <i class="fas fa-fw fa-coins"></i>
                        Gastos
                    </a>
                </div>
            </div>
        </li>
        <hr class="sidebar-divider">
        <li class="nav-item">
            <a class="nav-link collapsed" data-toggle="collapse" href="#multiCollapseExample4" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">
                <i class="fas fa-fw fa-list-alt"></i>
                <span>Informes</span>
            </a>
            <div id="multiCollapseExample4" class="collapse" aria-labelledby="headingTwo" data-parent="">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="listaUsuarios.php">
                        <i class="fas fa-fw fa-list-ul"></i>
                        Listado Usuarios
                    </a>
                    <a class="collapse-item" href="listadoClientes.php">
                        <i class="fas fa-fw fa-list-ul"></i>
                        Listado Clientes
                    </a>
                    <a class="collapse-item" href="listadOvalo.php">
                        <i class="fas fa-fw fa-list-ul"></i>
                        Listado Ovalos
                    </a>
                    <a class="collapse-item" href="listadoLote.php">
                        <i class="fas fa-fw fa-list-ul"></i>
                        Listado Lotes
                    </a>
                    <a class="collapse-item" href="listadoRiego.php">
                        <i class="fas fa-fw fa-list-ul"></i>
                        Listado Hora de Riego
                    </a>
                    <a class="collapse-item" href="listadoGastos.php">
                        <i class="fas fa-fw fa-list-ul"></i>
                        Listado de Gastos
                    </a>
                </div>
            </div>
        </li>
        <!--Inicio Navegación Propiedad-->
        <hr class="sidebar-divider">
        <!--Inicio Navegación Cartera -->
        <li class="nav-item">
            <a class="nav-link" href="pagoCuotas.php">
                <i class="fas fa-coins"></i>
                <span>Pagos</span></a>
        </li>
        <hr class="sidebar-divider">
        <!--Inicio Navegación Asistencias-->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-fw fa-list-alt"></i>
                <span>Asistencias</span>
            </a>
            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="listadoMingas.php">
                        <i class="fas fa-fw fa-check-circle"></i>
                        Mingas
                    </a>
                    <a class="collapse-item" href="listadoSesiones.php">
                        <i class="fas fa-fw fa-check-circle"></i>
                        Sesiones
                    </a>
                </div>
            </div>
        </li>

        <hr class="sidebar-divider">
        <!-- Nav Item - Tables -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-toggle="collapse" href="#multiCollapseExample5" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">
                <i class="fas fa-fw fa-print"></i>
                <span>Reportes</span>
            </a>
            <div id="multiCollapseExample5" class="collapse" aria-labelledby="headingTwo" data-parent="">
                <div class="bg-white py-2 collapse-inner rounded">

                    <a class="collapse-item" href="rSesiones.php">
                        <i class="fas fa-fw fa-file-alt"></i>
                        Reporte Sesiones
                    </a>
                    <a class="collapse-item" href="rMingas.php">
                        <i class="fas fa-fw fa-file-alt"></i>
                        Reporte Mingas
                    </a>
                    <a class="collapse-item" href="hriego.php">
                        <i class="fas fa-fw fa-file-alt"></i>
                        Reporte Gastos
                    </a>
                    <a class="collapse-item" href="rCobroClientes.php">
                        <i class="fas fa-fw fa-file-alt"></i>
                        Cobros por Cliente
                    </a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Pages Collapse Menu -->

        <!-- Nav Item - Charts -->
        <li class="nav-item">
            <a class="nav-link" href="listadoNotificaciones.php">
                <i class="fas fa-bell fa-fw"></i>
                <span>Notificaciones</span></a>
        </li>



        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

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

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow" style="background-color: #4e73df !important;">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Search -->


                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->


                    <!-- Nav Item - Alerts -->



                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-white  mr-3 " style="color:#ffffff !important" ><strong><?php echo $_SESSION['s_usuario'] ?></strong></span>
                            <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Perfil
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                Ajustes
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Cerrar Sesión
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>