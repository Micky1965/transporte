<?php
include ('../app/config.php');
include ('../layout/sesion.php');
include ('../layout/parte1.php');
include ('../app/controllers/moviles/show_movil.php');

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
                            <h3 class="card-title">¿ Quiere Eliminar los Datos del Móvil ?</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                </button>
                            </div>

                        </div>

                        <div class="card-body" style="display: block;">
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="../app/controllers/moviles/delete_movil.php" method="post">
                                        <input type="text" name="id_movil" value="<?php echo $id_movil_get;?>" hidden>
                                        <div class="form-group">
                                            <label for="">Marca</label>
                                            <input type="text" name="marca_movil" class="form-control" value="<?php echo $marca_movil;?>" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Modelo</label>
                                            <input type="text" name="modelo_movil" class="form-control" value="<?php echo $modelo_movil;?>" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Patente</label>
                                            <input type="text" name="patente_movil" class="form-control" value="<?php echo $patente_movil;?>" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Licencia</label>
                                            <input type="text" name="licencia_movil" class="form-control" value="<?php echo $licencia_movil;?>" disabled>
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
