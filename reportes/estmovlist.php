<?php
include ('../app/config.php');
include ('../layout/sesion.php');
include ('../layout/parte1.php');
include ('../app/controllers/estadomoviles/listado_estadomoviles.php');

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
                    <div class="card card-outline card-primary">
                        <div class="card-header" style="display: flex;">
                            <h4>Estado de los Móviles</h4>
                            <div style="width: 30px"></div> 
                            <a href="../pedidos/index.php" class="btn btn-info"><b>Volver</b></a> 
                        </div>

                        <div class="card-body" style="display: block;">
                        <div class="table table-responsive">
                            <table id="table_estadomovil" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th><center>Nro</center></th>
                                    <th><center>Móvil</center></th>
                                    <th><center>Modelo</center></th>
                                    <th><center>Hora Ingreso</center></th>
                                    <th><center>Hora Salida</center></th>
                                    <th><center>Fecha</center></th>
                                </tr>
                                </thead>
                                <tbody>
                                
                                <?php
                                $contador = 0;
                                foreach ($estadomovil_datos as $estadomovil_dato){
                                    $id_estadomovil = $estadomovil_dato['id_estadomovil']; ?>
                                
                                    <tr>
                                        <td><center><?php echo $contador = $contador + 1;?></center></td>
                                        <?php
                                        if ($estadomovil_dato['estado'] == 1) {?>
                                            <td style="background-color: #90EE90;"><center><?php echo $estadomovil_dato['nro'];?></center></td>
                                        <?php
                                        }else{ ?>
                                            <td style="background-color: #F6635C;"><center><?php echo $estadomovil_dato['nro'];?></center></td>
                                        <?php }?>
                                        <td><?php echo $estadomovil_dato['modelo'];?></td>
                                        <td><?php echo $estadomovil_dato['entrada'];?></td>
                                        <td><?php echo $estadomovil_dato['salida'];?></td>
                                        <td><?php echo $estadomovil_dato['fecha'];?></td>
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
    $(function() {
        $("#table_estadomovil").DataTable({
            "pageLength": 6,
            "language": {
                "emptyTable": "No hay información",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Móviles",
                "infoEmpty": "Mostrando 0 a 0 de 0 Móviles Registrados",
                "infoFiltered": "(Filtrado de _MAX_ total Móviles)",
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
            "responsive": true,
            "lengthChange": true,
            "autoWidth": false,

            buttons: [{
                extend: 'collection',
                text: 'Reportes',
                orientation: 'landscape',
                buttons: [
                {
                    extend: 'pdf'
                }, {
                    extend: 'excel'
                }, {
                    text: 'Imprimir',
                    extend: 'print'
                }]
            }, ],
        }).buttons().container().appendTo('#table_estadomovil_wrapper .col-md-6:eq(0)');
    });
</script>