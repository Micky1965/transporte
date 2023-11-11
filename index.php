<?php

include('app/config.php');
include('layout/sesion.php');
include('layout/parte1.php');
include('app/controllers/usuarios/listado_usuarios.php');
include('app/controllers/choferes/listado_choferes.php');
include('app/controllers/clientes/listado_clientes.php');
include('app/controllers/moviles/listado_moviles.php');
include('app/controllers/pedidos/listado_pedidos.php');
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <h1 class="m-0">Bienvenido al Sistema de Control de Datos </h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  <?php
  if ($rol_sesion == 1) { ?>
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">

          <div class="col-lg-3 col-6">
            <div class="small-box bg-gray">
              <div class="inner">
                <?php
                $contador_de_usuarios = 0;
                foreach ($usuarios_datos as $usuarios_dato) {
                  $contador_de_usuarios = $contador_de_usuarios + 1;
                }
                ?>
                <h3><?php echo $contador_de_usuarios; ?></h3>
                <p>Usuarios Registrados</p>
              </div>
              <a href="<?php echo $URL; ?>/usuarios/create.php">
                <div class="icon">
                  <i class="fas fa-user-plus"></i>
                </div>
              </a>
              <a href="<?php echo $URL; ?>/usuarios" class="small-box-footer">
                Listado de Usuarios <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>


          <div class="col-lg-3 col-6">
            <div class="small-box bg-pink">
              <div class="inner">
                <?php
                $contador_de_pedidos = 0;
                foreach ($pedidos_datos as $pedidos_dato) {
                  $contador_de_pedidos = $contador_de_pedidos + 1;
                }
                ?>
                <h3><?php echo $contador_de_pedidos; ?></h3>
                <p>Pedidos Registrados</p>
              </div>
              <a href="<?php echo $URL; ?>/pedidos/create.php">
                <div class="icon">
                  <i class="fas fa-phone"></i>
                </div>
              </a>
              <a href="<?php echo $URL; ?>/pedidos" class="small-box-footer">
                Listado de Pedidos <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>


          <div class="col-lg-3 col-6">
            <div class="small-box bg-red">
              <div class="inner">
                <?php
                $contador_de_moviles = 0;
                foreach ($moviles_datos as $moviles_dato) {
                  $contador_de_moviles = $contador_de_moviles + 1;
                }
                ?>
                <h3><?php echo $contador_de_moviles; ?></h3>
                <p>Móviles Registrados</p>
              </div>
              <a href="<?php echo $URL; ?>/moviles/create.php">
                <div class="icon">
                  <i class="fas fa-car"></i>
                </div>
              </a>
              <a href="<?php echo $URL; ?>/moviles" class="small-box-footer">
                Listado de Móviles <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>


          <div class="col-lg-3 col-6">
            <div class="small-box bg-purple">
              <div class="inner">
                <?php
                $contador_de_choferes = 0;
                foreach ($choferes_datos as $choferes_dato) {
                  $contador_de_choferes = $contador_de_choferes + 1;
                }
                ?>
                <h3><?php echo $contador_de_choferes; ?></h3>
                <p>Choferes Registrados</p>
              </div>
              <a href="<?php echo $URL; ?>/choferes/create.php">
                <div class="icon">
                  <i class="fas fa-user-friends"></i>
                </div>
              </a>
              <a href="<?php echo $URL; ?>/choferes" class="small-box-footer">
                Listado de Choferes <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>


          <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <?php
                $contador_de_clientes = 0;
                foreach ($clientes_datos as $clientes_dato) {
                  $contador_de_clientes = $contador_de_clientes + 1;
                }
                ?>
                <h3><?php echo $contador_de_clientes; ?></h3>
                <p>Clientes Registrados</p>
              </div>
              <a href="<?php echo $URL; ?>/clientes/create.php">
                <div class="icon">
                  <i class="fas fa-male"></i>
                </div>
              </a>
              <a href="<?php echo $URL; ?>/clientes" class="small-box-footer">
                Listado de Clientes <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
        

        <?php
    }
    if ($rol_sesion == 2) { ?>
    
    <?php
    }
    ?>
    

      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include ('layout/parte2.php'); ?>
