<?php
include ('../app/config.php');
include ('../layout/sesion.php');
include ('../layout/parte1.php');
include ('../app/controllers/moviles/listado_moviles.php');

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
                    <div class="card card-outline card-secondary">
                        <!-- Aqui se creó un LIK en el título paara redereccionar a un archivo de reportes
                        que esta listo para imprimir o pasar los datos a .exe -->
                        <div class="card-header">
                            <h3 class="card-title"><a href="../reportes/movileslist.php" class="link"><b>Listado de Vehículos Registrados</b></a></h3> 
                        </div>

                        <div class="card-body" style="display: block;">
                            <table id="table_moviles" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th><center>Nro</center></th>
                                    <th><center>Marca</center></th>
                                    <th><center>Patente</center></th>
                                    <th><center>Propietario</center></th>
                                    <th><center>Licencia</center></th>
                                    <th><center>Nro Móvil</center></th>
                                    <th><center>Incorporación</center></th>
                                    <th><center>Acciones</center></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $contador = 0;
                                foreach ($moviles_datos as $moviles_dato){
                                    $id_movil = $moviles_dato['id_movil']; ?>
                                    <tr>
                                        <td><center><?php echo $contador = $contador + 1;?></center></td>
                                        <td><?php echo $moviles_dato['marca'];?></td>
                                        <td><?php echo $moviles_dato['patente'];?></td>
                                        <td><?php echo $moviles_dato['propietario'];?></td>
                                        <td><?php echo $moviles_dato['licencia'];?></td>
                                        <td><?php echo $moviles_dato['nro'];?></td>
                                        <td><?php echo $moviles_dato['incorporacion'];?></td>
                                        <td>
                                            <center>
                                                <div class="btn-group">
                                                    <a href="show.php?id=<?php echo $id_movil; ?>" type="button" class="btn btn-secondary btn-sm"><i class="fa fa-eye"> Ver</i></a>
                                                    <a href="update.php?id=<?php echo $id_movil; ?>" type="button" class="btn btn-success btn-sm"><i class="fa fa-pencil-alt"> Editar</i></a>
                                                    <a href="delete.php?id=<?php echo $id_movil; ?>" type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"> Eliminar</i></a>
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



<script>
    $(function () {
        $("#table_moviles").DataTable({
            "pageLength": 6,
            "language": {
                "emptyTable": "No hay información",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Móviles Registrados",
                "infoEmpty": "Mostrando 0 a 0 de 0 Móviles",
                "infoFiltered": "(Filtrado de _MAX_ Móviles)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Móviles",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Buscador:",
                "zeroRecords": "Sin resultados encontrados",
                "paginate": {
                    "first": "Primero",
                    "last": "Ultimo",
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            },
            "responsive": true, "lengthChange": true, "autoWidth": false,
            
        }).buttons().container().appendTo('#table_moviles_wrapper .col-md-6:eq(0)');
    });
</script>
