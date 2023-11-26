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
                    <nav class="navbar navbar-expand-lg bg-secondary">
                        <div class="container-fluid">
                            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                                <div class="navbar-nav">
                                    <a class="nav-link" href="../pedidos/create.php" style="color:gold;">
                                                                <i class="fas fa-phone"></i><b> Nuevo Viaje</b></a>
                                    <!-- <a class="nav-link" href="../reloj/index.html" style="color:#ffffff;">
                                                                <i class="fas fa-list"></i><b> Reservas</b></a> -->
                                    <a class="nav-link" href="../moviles/enservicio.php" style="color:#ffffff;">
                                                                <i class="fas fa-car"></i><b> En Servicio</b></a>
                                    <a class="nav-link" href="../moviles/fueraservicio.php" style="color:#ffffff;">
                                                                <i class="fas fa-ban"></i><b> Fuera de Servicio</b></a>
                                    <a class="nav-link" href="../moviles/index2.php" style="color:#ffffff;">
                                                                <i class="fas fa-car-side"></i><b> Estado de los Móviles</b></a>
                                    <div style="width: 280px"></div> 
                                    <a href="vaciar.php" class="btn btn-danger">Vaciar Lista</a>
                                </div>
                            </div>
                        </div>
                    </nav>
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
                        <div class="card-header" style="display: flex;">
                            <h3 class="card-title"><a href="../reportes/viajeslist.php" class="link"><b>Guardar el Listado de Viajes</b></a></h3>
                        </div>

                        <div class="card-body" style="display: block;">
                            <table id="table_pedidos" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th><center>Nro</center></th>
                                        <th><center>Dirección</center></th>
                                        <th><center>Apellido</center></th>
                                        <th><center>Móvil</center></th>
                                        <th><center>Hora</center></th>
                                        <th><center>Observ.</center></th>
                                        <th><center>Fecha</center></th>
                                        <th><center>Acciones</center></th>
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
                                            <td><center><?php echo $pedidos_dato['movil']; ?></center></td>
                                            <td><?php echo $pedidos_dato['fyh_creacion']; ?></td>
                                            <td><?php echo $pedidos_dato['observaciones']; ?></td>
                                            <td><?php echo $pedidos_dato['fecha']; ?></td>
                                            <td>
                                                <center>
                                                    <div class="btn-group">
                                                        <a href="show.php?id=<?php echo $id_pedido; ?>" type="button" class="btn btn-secondary btn"><i class="fa fa-eye"></i></a>
                                                        <a href="update.php?id=<?php echo $id_pedido; ?>" type="button" class="btn btn-success btn"><i class="fa fa-pencil-alt"></i></a>
                                                        <a href="delete.php?id=<?php echo $id_pedido; ?>" type="button" class="btn btn-danger btn"><i class="fa fa-trash"></i></a>

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

<?php include('../layout/mensajes.php'); ?>
<?php include('../layout/parte2.php'); ?>

<script>
    $(function() {
        $("#table_pedidos").DataTable({
            "pageLength": 6,
            "language": {
                "emptyTable": "No hay información",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Pedidos Registrados",
                "infoEmpty": "Mostrando 0 a 0 de 0 Pedidos",
                "infoFiltered": "(Filtrado de _MAX_ Pedidos)",
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
            
        }).buttons().container().appendTo('#table_pedidos_wrapper .col-md-6:eq(0)');
    });
</script>

