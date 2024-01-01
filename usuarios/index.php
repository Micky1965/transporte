<?php
include ('../app/config.php');
include ('../layout/sesion.php');
include ('../layout/parte1.php');
include ('../app/controllers/usuarios/listado_usuarios.php');
include ('../app/controllers/roles/listado_roles.php');

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
                    <div class="card card-outline card-secondary">
                        <div class="card-header">
                            <h3 class="card-title"><a href="../reportes/usuarioslist.php" class="link"><b>Guardar Lista de Usuarios</b></a></h3>
                        </div>

                        <div class="card-body" style="display: block;">
                            <table id="table_usuarios" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th><center>Nro</center></th>
                                    <th><center>Usuario</center></th>
                                    <th><center>Nombre</center></th>
                                    <th><center>Celular</center></th>
                                    <th><center>Rol del Usuario</center></th>
                                    <th><center>Acciones</center></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $contador = 0;
                                foreach ($usuarios_datos as $usuarios_dato){
                                    $id_usuario = $usuarios_dato['id_usuario']; ?>
                                    <tr>
                                        <td><center><?php echo $contador = $contador + 1;?></center></td>
                                        <td><?php echo $usuarios_dato['nick'];?></td>
                                        <td><?php echo $usuarios_dato['nombres'];?></td>
                                        <td>
                                            <a href="https://wa.me/54<?php echo $usuarios_dato['celular'];?>" target="_blank" class="btn btn-success">
                                            <i class="fas fa-phone"></i>
                                            <?php echo $usuarios_dato['celular'];?>
                                            </a>
                                        </td>
                                        <td><?php echo $usuarios_dato['rol'];?></td>
                                        <td>
                                            <center>
                                                <div class="btn-group">
                                                    <a href="show.php?id=<?php echo $id_usuario; ?>" type="button" class="btn btn-secondary btn-sm"><i class="fa fa-eye"> Ver</i></a>
                                                    <a href="update.php?id=<?php echo $id_usuario; ?>" type="button" class="btn btn-success btn-sm"><i class="fa fa-pencil-alt"> Editar</i></a>
                                                    <a href="delete.php?id=<?php echo $id_usuario; ?>" type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"> Eliminar</i></a>
                                                </div>
                                            </center>
                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?>
                                </tbody>
                            </table>
                            
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

