<?php
include('../app/config.php');
include('../layout/sesion.php');
include('../layout/parte1.php');
include('../app/controllers/moviles/update_movil.php');
include('../app/controllers/moviles/listenservicio.php');
include('../app/controllers/choferes/listdisponibles.php');

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
                <div class="col-md-12">
                    <div class="card card-success">
                        <div class="card-header">
                            <h1 class="card-title"><b>Actualizar Datos del movil</b></h1>
                        </div>

                        <div class="card-body" style="display: block;">
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="../app/controllers/moviles/update.php" method="post">
                                        <input type="text" name="id_movil" value="<?php echo $id_movil_get; ?>" hidden>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="">Marca</label>
                                                    <input type="text" name="marca_movil" class="form-control" value="<?php echo $marca_movil; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="">Modelo</label>
                                                    <input type="text" name="modelo_movil" class="form-control" value="<?php echo $modelo_movil; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="">Año</label>
                                                    <input type="number" name="anio_movil" class="form-control" value="<?php echo $anio_movil; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="">Patente</label>
                                                    <input type="text" style="text-transform: uppercase;" name="patente_movil" class="form-control" value="<?php echo $patente_movil; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="">Licencia</label>
                                                    <input type="number" name="licencia_movil" class="form-control" value="<?php echo $licencia_movil; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="">Nro de Móvil</label>
                                                    <input type="number" name="nro_movil" class="form-control" value="<?php echo $nro_movil; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="">Propietario</label>
                                                    <input type="text" name="propietario_movil" class="form-control" value="<?php echo $propietario_movil; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="">Incorporación</label>
                                                    <input type="date" name="incorporacion" class="form-control" value="<?php echo $incorporacion; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Chofer 1</label>
                                                    <input type="text" name="chofer1_movil" class="form-control" value="<?php echo $chofer1_movil; ?>">
                                                    <!-- <select name="chofer1_movil" id="" class="form-control">
                                                    <option selected="true" disabled="disabled">Seleccione Chofer 1</option>
                                                        <?php
                                                        foreach ($choferes_datos as $choferes_dato) { ?>
                                                            <option value="<?php echo $choferes_dato['nombre_chofer']; ?>" <?php if ($choferes_dato['nombre_chofer'] == $chofer1_movil) { ?> selected="selected" <?php } ?> require>
                                                                <?php echo $choferes_dato['nombre_chofer']; ?>
                                                            </option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select> -->
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Chofer 2</label>
                                                    <input type="text" name="chofer2_movil" class="form-control" value="<?php echo $chofer2_movil; ?>">
                                                    <!-- <select name="chofer2_movil" id="" class="form-control">
                                                    <option selected="true" disabled="disabled">Seleccione Chofer 2</option>
                                                        <?php
                                                        foreach ($choferes_datos as $choferes_dato) { ?>
                                                            <option value="<?php echo $choferes_dato['nombre_chofer']; ?>" <?php if ($choferes_dato['nombre_chofer'] == $chofer2_movil) { ?> selected="selected" <?php } ?> require>
                                                                <?php echo $choferes_dato['nombre_chofer']; ?>
                                                            </option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select> -->
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <a href="index.php" class="btn btn-secondary">Cancelar</a>
                                            <button type="submit" class="btn btn-success">Actualizar</button>
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