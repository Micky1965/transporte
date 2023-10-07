<?php
include('../app/config.php');
include('../layout/sesion.php');
include('../layout/parte1.php');
include('../app/controllers/pedidos/listado_pedidos.php');

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

                    <div class="card card-outline card-warning">
                        <div class="card-header" style="display: flex;">
                            <h4> Listado de Viajes Registrados</h4>
                            <div style="width: 30px"></div> 
                            <a href="../pedidos/index.php" class="btn btn-info"><b>Volver</b></a> 
                        </div>

                        <div class="card-body" style="display: block;">
                            <table id="table_pedidos" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th><center>Nro</center></th>
                                        <th><center>Dirección</center></th>
                                        <th><center>Apellido</center></th>
                                        <th><center>Celular</center></th>
                                        <th><center>Móvil</center></th>
                                        <th><center>Destino</center></th>
                                        <th><center>Hora</center></th>
                                        <th><center>Observ.</center></th>
                                        <th><center>Fecha</center></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $contador = 0;
                                    foreach ($pedidos_datos as $pedidos_dato) {
                                        $id_pedido = $pedidos_dato['id_pedido']; ?>
                                        <tr>
                                            <td>
                                                <center><?php echo $contador = $contador + 1; ?></center>
                                            </td>
                                            <td><?php echo $pedidos_dato['direccion']; ?></td>
                                            <td><?php echo $pedidos_dato['nombre']; ?></td>
                                            <td><?php echo $pedidos_dato['celular']; ?></td>
                                            <td><?php echo $pedidos_dato['movil']; ?></td>
                                            <td><?php echo $pedidos_dato['destino']; ?></td>
                                            <td><?php echo $pedidos_dato['fyh_creacion']; ?></td>
                                            <td><?php echo $pedidos_dato['observaciones']; ?></td>
                                            <td><?php echo $pedidos_dato['fecha']; ?></td>
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

<?php include('../layout/mensajes.php'); ?>
<?php include('../layout/parte2.php'); ?>

<script>
    $(function() {
        $("#table_pedidos").DataTable({
            "pageLength": 6,
            "language": {
                "emptyTable": "No hay información",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Pedidos",
                "infoEmpty": "Mostrando 0 a 0 de 0 Pedidos Registrados",
                "infoFiltered": "(Filtrado de _MAX_ total Pedidos)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Pedidos",
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
        }).buttons().container().appendTo('#table_pedidos_wrapper .col-md-6:eq(0)');
    });
</script>