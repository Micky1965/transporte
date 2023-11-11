<?php
include ('../app/config.php');
include ('../layout/sesion.php');
include ('../layout/parte1.php');
include ('../app/controllers/choferes/listado_choferes.php');
include ('../app/controllers/roles2/listado_roles2.php');

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
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h3 class="card-title"><a href="../reportes/chofereslist.php" class="link"><b>Informe Completo de Choferes</b></a></h3>
                        </div>

                        <div class="card-body" style="display: block;">
                            <table id="table_choferes" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th><center>Nro</center></th>
                                    <th><center>Nombre</center></th>
                                    <th><center>Celular</center></th>
                                    <th><center>Rol del Conductor</center></th>
                                    <th><center>Acciones</center></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $contador = 0;
                                foreach ($choferes_datos as $choferes_dato){
                                    $id_chofer = $choferes_dato['id_chofer']; ?>
                                    <tr>
                                        <td><center><?php echo $contador = $contador + 1;?></center></td>
                                        <td><?php echo $choferes_dato['nombre'];?></td>
                                        <td><?php echo $choferes_dato['celular'];?></td>
                                        <td><?php echo $choferes_dato['rol2'];?></td>
                                        <td>
                                            <center>
                                                <div class="btn-group">
                                                    <a href="show.php?id=<?php echo $id_chofer; ?>" type="button" class="btn btn-secondary btn-sm"><i class="fa fa-eye"> Ver</i></a>
                                                    <a href="update.php?id=<?php echo $id_chofer; ?>" type="button" class="btn btn-success btn-sm"><i class="fa fa-pencil-alt"> Editar</i></a>
                                                    <a href="delete.php?id=<?php echo $id_chofer; ?>" type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"> Eliminar</i></a>
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
        $("#table_choferes").DataTable({
            "pageLength": 6,
            "language": {
                "emptyTable": "No hay información",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Choferes Registrados",
                "infoEmpty": "Mostrando 0 a 0 de 0 Choferes",
                "infoFiltered": "(Filtrado de _MAX_ Choferes)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Choferes",
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
            
            buttons: [{
                extend: 'collection',
                text: 'Reportes',
                orientation: 'landscape',
                buttons: [
                {
                    extend: 'excel'
                },{
                    text: 'Imprimir',
                    extend: 'print'
                }
                ]
            },
            ],
        }).buttons().container().appendTo('#table_choferes_wrapper .col-md-6:eq(0)');
    });
</script>


