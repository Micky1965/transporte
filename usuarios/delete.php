<?php
include ('../app/config.php');
include ('../layout/sesion.php');
include ('../layout/parte1.php');
include ('../app/controllers/usuarios/show_usuario.php');

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-0">
                <div class="col-sm-12">
                    
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-9">
                    <div class="card card-danger">
                        <div class="card-header">
                            <h3 class="card-title">¿ Quiere Eliminar los Datos del Usuario ?</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                </button>
                            </div>

                        </div>

                        <div class="card-body" style="display: block;">
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="../app/controllers/usuarios/delete_usuario.php" method="post">
                                        <input type="text" name="id_user" value="<?php echo $id_usuario_get;?>" hidden>
                                        <div class="form-group">
                                            <label for="">Usuario</label>
                                            <input type="text" name="nick_user" class="form-control" value="<?php echo $nick_user;?>" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Nombre completo</label>
                                            <input type="text" name="nombre_user" class="form-control" value="<?php echo $nombre_user;?>" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Rol del usuario</label>
                                            <input type="text" name="rol" class="form-control" value="<?php echo $rol;?>" disabled>
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <a href="index.php" class="btn btn-secondary">Cancelar</a>
                                            <button class="btn btn-danger">Eliminar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include ('../layout/mensajes.php'); ?>
<?php include ('../layout/parte2.php'); ?>
