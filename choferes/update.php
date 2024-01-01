<?php
include('../app/config.php');
include('../layout/sesion.php');
include('../layout/parte1.php');
include('../app/controllers/choferes/update_chofer.php');
include('../app/controllers/roles2/listado_roles2.php');

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
                            <h1 class="card-title"><b>Actualizar Datos del Chofer</b></h1>
                        </div>

                        <div class="card-body" style="display: block;">
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="../app/controllers/choferes/update.php" method="post">
                                        <input type="text" name="id_chofer" value="<?php echo $id_chofer_get; ?>" hidden>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Nombres / Apellidos</label>
                                                    <input type="text" name="nombre_chofer" class="form-control" value="<?php echo $nombre_chofer; ?>" required>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="">Dni</label>
                                                    <input type="text" name="dni_chofer" class="form-control" value="<?php echo $dni_chofer; ?>" required>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="">Celular</label>
                                                    <input type="text" name="celular_chofer" class="form-control" value="<?php echo $celular_chofer; ?>" required>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="">Rol del Conductor</label>
                                                    <select name="rol2" id="" class="form-control">
                                                        <?php
                                                        foreach ($roles2_datos as $roles2_dato) {
                                                            $rol2_tabla = $roles2_dato['rol2'];
                                                            $id_rol2 = $roles2_dato['id_rol2']; ?>
                                                            <option value="<?php echo $id_rol2; ?>" <?php if($rol2_tabla == $choferes_dato['rol2']) { ?> selected="selected" <?php } ?> require>
                                                                <?php echo $rol2_tabla; ?>
                                                            </option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Dirección</label>
                                                    <input type="text" name="direccion_chofer" class="form-control" value="<?php echo $direccion_chofer; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Observaciones</label>
                                                    <input type="text" name="obs" class="form-control" value="<?php echo $obs; ?>">
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