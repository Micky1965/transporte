<?php
include('../app/config.php');
include('../layout/sesion.php');
include('../layout/parte1.php');
include('../app/controllers/localidades/update_localidad.php');

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
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
                <div class="col-md-12">
                    <div class="card card-success">
                        <div class="card-header">
                            <h1 class="card-title">Actualice los Datos</h1>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                </button>
                            </div>

                        </div>

                        <div class="card-body" style="display: block;">
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="../app/controllers/localidades/update.php" method="post">
                                    <input type="text" name="id_localidad" value="<?php echo $id_localidad_get; ?>" hidden>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Nombre</label>
                                                    <input type="text" name="nombre_localidad" class="form-control" value="<?php echo $nombre_localidad;?>" required>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="">Distancia en Kms</label>
                                                    <input type="text" name="distancia_localidad" class="form-control" value="<?php echo $distancia_localidad;?>" required>
                                                </div>
                                            </div>
                                            <!-- <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="">Precio T1</label>
                                                    <input type="text" name="precio_t1" class="form-control"value="<?php echo $precio_t1;?>">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="">Precio T2-5-6</label>
                                                    <input type="text" name="precio_t2" class="form-control" value="<?php echo $precio_t2;?>">
                                                </div>
                                            </div> -->
                                            <hr>
                                            <div class="form-group">
                                                <a href="index.php" class="btn btn-secondary">Cancelar</a>
                                                <button type="submit" class="btn btn-success">Actualizar</button>
                                            </div>
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

<?php include('../layout/mensajes.php'); ?>
<?php include('../layout/parte2.php'); ?>