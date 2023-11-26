<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RemiS</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="<?php echo $URL; ?>/public/templates/AdminLTE-3.2.0/fonts.css">
    <!-- Font Awesome Icons-->
    <link rel="stylesheet" href="<?php echo $URL; ?>/public/templates/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="../public/templates/AdminLTE-3.2.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo $URL; ?>/public/templates/AdminLTE-3.2.0/dist/css/adminlte.min.css">

    <!-- libreria sweetalert2-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo $URL; ?>/public/templates/AdminLTE-3.2.0/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo $URL; ?>/public/templates/AdminLTE-3.2.0/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo $URL; ?>/public/templates/AdminLTE-3.2.0/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    <!-- jQuery -->
    <script src="<?php echo $URL; ?>/public/templates/AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>

</head>
<body class="hold-transition sidebar-mini">

<div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <span class="nav-link"><b> Hola <?php echo $nick_sesion; ?>, Bienvenido y buena jornada laboral !</b></span> 
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.navbar -->
    
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="<?php echo $URL; ?>" class="brand-link">
                <img src="<?php echo $URL; ?>/public/img/remis1.jpg" alt="imagen de un auto blanco" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light h4" style="color: #00FFFF;"><b>Remises</b></span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                        <?php
                        if ($rol_sesion == 1) { ?>

                            <li class="nav-item">
                                <a href="#" class="nav-link active">
                                    <i class="nav-icon fas fa-users"></i>
                                    <p>
                                        Usuarios
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="<?php echo $URL; ?>/usuarios/create.php" class="nav-link">
                                            <i class="nav-icon fas fa-user"></i>
                                            <p>Agregar Usuario</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php echo $URL; ?>/usuarios" class="nav-link">
                                            <i class="nav-icon fas fa-list"></i>
                                            <p>Listado de Usuarios</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>


                            <li class="nav-item">
                                <a href="#" class="nav-link active">
                                    <i class="nav-icon fas fa-phone"></i>
                                    <p>
                                        Pedidos
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="<?php echo $URL; ?>/pedidos/create.php" class="nav-link">
                                            <i class="nav-icon fas fa-phone"></i>
                                            <p>Nuevo Viaje</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php echo $URL; ?>/pedidos" class="nav-link">
                                            <i class="nav-icon fas fa-list"></i>
                                            <p>Listado de Pedidos</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            
                            <li class="nav-item">
                                <a href="#" class="nav-link active">
                                    <i class="nav-icon fas fa-car"></i>
                                    <p>
                                        Vehículos
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="<?php echo $URL; ?>/moviles/create.php" class="nav-link">
                                            <i class="nav-icon fas fa-car-side"></i>
                                            <p>Agregar Vehículo</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php echo $URL; ?>/moviles" class="nav-link">
                                            <i class="nav-icon fas fa-list"></i>
                                            <p>Listado de Vehículos</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>


                            <li class="nav-item">
                                <a href="#" class="nav-link active">
                                    <i class="nav-icon fas fa-male"></i>
                                    <p>
                                        Clientes
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="<?php echo $URL; ?>/clientes/create.php" class="nav-link">
                                            <i class="nav-icon fas fa-user"></i>
                                            <p>Agregar Cliente</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php echo $URL; ?>/clientes" class="nav-link">
                                            <i class="nav-icon fas fa-list"></i>
                                            <p>Listado de Clientes</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>


                            <li class="nav-item">
                                <a href="#" class="nav-link active">
                                    <i class="nav-icon fas fa-user-friends"></i>
                                    <p>
                                        Choferes
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="<?php echo $URL; ?>/choferes/create.php" class="nav-link">
                                            <i class="nav-icon fas fa-user"></i>
                                            <p>Agregar Chofer</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php echo $URL; ?>/choferes" class="nav-link">
                                            <i class="nav-icon fas fa-list"></i>
                                            <p>Listado de Choferes</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>


                            <li class="nav-item">
                                <a href="<?php echo $URL; ?>/moviles/index2.php" class="nav-link active">
                                    <i class="nav-icon fas fa-car-side"></i>
                                    <p>
                                        Estado de los Móviles
                                    </p>
                                </a>
                            </li>


                            <!-- <li class="nav-item">
                                <a href="#" class="nav-link active">
                                    <i class="nav-icon fas fa-address-card"></i>
                                    <p>
                                        Roles
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="<?php echo $URL; ?>/roles/create.php" class="nav-link">
                                            <i class="nav-icon fas fa-address-card"></i>
                                            <p>Nuevo Rol</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php echo $URL; ?>/roles" class="nav-link">
                                            <i class="nav-icon fas fa-list"></i>
                                            <p>Listado de Roles</p>
                                        </a>
                                    </li>
                                </ul>
                            </li> -->


                            <!-- <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-address-card"></i>
                                <p>
                                    Roles2
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo $URL; ?>/roles2/create.php" class="nav-link">
                                        <i class="nav-icon fas fa-address-card"></i>
                                        <p>Nuevo Rol2</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo $URL; ?>/roles2" class="nav-link">
                                        <i class="nav-icon fas fa-list"></i>
                                        <p>Listado de Roles2</p>
                                    </a>
                                </li>
                            </ul>
                        </li> -->


                            <li class="nav-item">
                                <a href="<?php echo $URL; ?>/calculadora/precios.php" class="nav-link active">
                                    <i class="nav-icon fas fa-calculator"></i>
                                    <p>
                                        Calcular Precio Viaje
                                    </p>
                                </a>
                            </li>
                                
                            <li class="nav-item">
                                <a href="<?php echo $URL; ?>/localidades" class="nav-link active">
                                    <i class="nav-icon fas fa-map"></i>
                                    <p>
                                        Localidades
                                    </p>
                                </a>
                            </li>


                            <li class="nav-item">
                                <a href="<?php echo $URL; ?>/calculadora" class="nav-link active">
                                    <i class="nav-icon fas fa-dollar-sign"></i>
                                    <p>
                                        Actualizar Tarifa
                                    </p>
                                </a>
                            </li>


                            <li class="nav-item">
                                <a href="<?php echo $URL; ?>/app/controllers/login/cerrar_sesion.php" class="nav-link" style="background-color: #D71313;">
                                    <i class="nav-icon fas fa-power-off"></i>
                                    <p>Cerrar Sesión</p>
                                </a>
                            </li>
        
                            
                        <?php
                        }
                        if ($rol_sesion == 2) { ?>

                            <li class="nav-item">
                                <a href="<?php echo $URL; ?>/pedidos" class="nav-link active">
                                    <i class="nav-icon fas fa-phone"></i>
                                    <p>
                                        Pedidos
                                    </p>
                                </a>
                            </li>


                            <li class="nav-item">
                                <a href="#" class="nav-link active">
                                    <i class="nav-icon fas fa-male"></i>
                                    <p>
                                        Clientes
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="<?php echo $URL; ?>/clientes/create.php" class="nav-link">
                                            <i class="nav-icon fas fa-user"></i>
                                            <p>Agregar Cliente</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php echo $URL; ?>/clientes" class="nav-link">
                                            <i class="nav-icon fas fa-list"></i>
                                            <p>Listado de Clientes</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>


                            <li class="nav-item">
                                <a href="<?php echo $URL; ?>/localidades" class="nav-link active">
                                    <i class="nav-icon fas fa-map"></i>
                                    <p>
                                        Localidades
                                    </p>
                                </a>
                            </li>


                            <li class="nav-item">
                                <a href="<?php echo $URL; ?>/calculadora/precios.php" class="nav-link active">
                                    <i class="nav-icon fas fa-calculator"></i>
                                    <p>
                                        Calcular Precio del Viaje
                                    </p>
                                </a>
                            </li>


                            <li class="nav-item">
                                <a href="<?php echo $URL; ?>/moviles/movoper.php" class="nav-link active">
                                    <i class="nav-icon fas fa-car"></i>
                                    <p>
                                        Listado de Móviles
                                    </p>
                                </a>
                            </li>


                            <li class="nav-item">
                                <a href="<?php echo $URL; ?>/choferes/choper.php" class="nav-link active">
                                    <i class="nav-icon fas fa-user-friends"></i>
                                    <p>
                                        Choferes
                                    </p>
                                </a>
                            </li>


                            <li class="nav-item">
                                <a href="<?php echo $URL; ?>/app/controllers/login/cerrar_sesion.php" class="nav-link" style="background-color: #D71313;">
                                    <i class="nav-icon fas fa-power-off"></i>
                                    <p>Cerrar Sesión</p>
                                </a>
                            </li>

                        <?php
                        }
                        ?>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
        
    
