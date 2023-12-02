<?php
include('../app/config.php');
include('../layout/sesion.php');
include('../layout/parte1.php');
include('../app/controllers/usuarios/update_usuario.php');
include('../app/controllers/roles/listado_roles.php');

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
                            <h3 class="card-title"><b>Actualizar Datos del Usuario</b></h3>
                        </div>

                        <div class="card-body" style="display: block;">
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="../app/controllers/usuarios/update.php" method="post">
                                        <input type="text" name="id_user" value="<?php echo $id_usuario_get; ?>" hidden>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="">Usuario</label>
                                                    <input type="text" name="nick_user" class="form-control" value="<?php echo $nick_user; ?>" required>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label for="">Nombre Completo</label>
                                                    <input type="text" name="nombre_user" class="form-control" value="<?php echo $nombre_user; ?>" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="">Dni</label>
                                                    <input type="number" name="dni_user" class="form-control" value="<?php echo $dni_user; ?>" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="">Celular</label>
                                                    <input type="number" name="celular_user" class="form-control" value="<?php echo $celular_user; ?>" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="">Rol del usuario</label>
                                                    <select name="rol" id="" class="form-control">
                                                        <?php
                                                        foreach ($roles_datos as $roles_dato){
                                                            $rol_tabla = $roles_dato['rol'];
                                                            $id_rol = $roles_dato['id_rol']; ?>
                                                            <option value="<?php echo $id_rol; ?>"<?php if($rol_tabla == $usuarios_dato['rol']){ ?> selected="selected" <?php } ?> >
                                                                <?php echo $rol_tabla;?>
                                                            </option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="">Contraseña</label>
                                                    <input type="text" name="password_user" class="form-control" value="<?php echo $password_user; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label for="">Dirección</label>
                                                    <input type="text" name="direccion_user" class="form-control" value="<?php echo $direccion_user; ?>" required>
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