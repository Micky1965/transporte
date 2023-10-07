<?php
include('../app/config.php');
include('../layout/sesion.php');
include('../layout/parte1.php');
include('../app/controllers/moviles/show_movil.php');

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
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h3 class="card-title">Datos del movil</h3>
                       </div>

                        <div class="card-body" style="display: block;">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Marca</label>
                                                <input type="text" name="marca_movil" class="form-control" value="<?php echo $marca_movil; ?>" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Modelo</label>
                                                <input type="text" name="modelo_movil" class="form-control" value="<?php echo $modelo_movil; ?>" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Año</label>
                                                <input type="text" name="anio_movil" class="form-control" value="<?php echo $anio_movil; ?>" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Patente</label>
                                                <input type="text" name="patente_movil" class="form-control" value="<?php echo $patente_movil; ?>" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Licencia</label>
                                                <input type="text" name="licencia_movil" class="form-control" value="<?php echo $licencia_movil; ?>" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Nro de Móvil</label>
                                                <input type="text" name="nro_movil" class="form-control" value="<?php echo $nro_movil; ?>" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Propietario</label>
                                                <input type="text" name="propietario_movil" class="form-control" value="<?php echo $propietario_movil; ?>" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Incorporación</label>
                                                <input type="date" name="incorporacion" class="form-control" value="<?php echo $incorporacion; ?>" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Chofer 1</label>
                                                <input type="text" name="chofer1_movil" class="form-control" value="<?php echo $chofer1_movil; ?>" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Chofer 2</label>
                                                <input type="text" name="chofer2_movil" class="form-control" value="<?php echo $chofer2_movil; ?>" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <a href="index.php" class="btn btn-secondary">Volver</a>
                                    </div>
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

<?php include('../layout/mensajes.php'); ?>
<?php include('../layout/parte2.php'); ?>