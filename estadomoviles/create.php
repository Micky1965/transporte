<?php
include('../app/config.php');
include('../layout/sesion.php');
include('../layout/parte1.php');
include('../app/controllers/moviles/listado_moviles.php');
include('../app/controllers/estadomoviles/listado_estadomoviles.php');

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-0">
                <div class="col-sm-12">
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-listamov">
                        <i class="fas fa-car"></i> Buscar Móvil
                    </button>
                    <!-- Modal para seleccionar movil -->
                    <div class="modal fade" id="modal-listamov">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title"><b>Móviles</b></h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="table table-responsive">
                                        <table id="table_moviles" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th><center>Seleccionar</center></th>
                                                    <th><center>Nro Móvil</center></th>
                                                    <th><center>Modelo</center></th>
                                                    <th><center>Patente</center></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                foreach ($moviles_datos as $moviles_dato) {
                                                    $id_movil = $moviles_dato['id_movil']; ?>
                                                    <tr>
                                                        <td>
                                                            <button class="btn btn-info btn-sm" id="btn_escoger<?php echo $id_movil; ?>">
                                                                Escoger
                                                            </button>
                                                            <script>
                                                                $('#btn_escoger<?php echo $id_movil; ?>').click(function() {

                                                                    var nro_movil = "<?php echo $moviles_dato['nro']; ?>";
                                                                    $('#nro_movil').val(nro_movil);
                                                                    var modelo_movil = "<?php echo $moviles_dato['modelo']; ?>";
                                                                    $('#modelo_movil').val(modelo_movil);
                                                                    var patente_movil = "<?php echo $moviles_dato['patente']; ?>";
                                                                    $('#patente_movil').val(patente_movil);
                                                                    $('#modal-listamov').modal('toggle');
                                                                });
                                                            </script>
                                                        </td>
                                                        <td><?php echo $moviles_dato['nro']; ?></td>
                                                        <td><?php echo $moviles_dato['modelo']; ?></td>
                                                        <td><?php echo $moviles_dato['patente']; ?></td>
                                                    </tr>
                                                <?php
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal fin seleccion de moviles  -->
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
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Ingresar a Estado de Móviles</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                </button>
                            </div>
                        
                        </div>

                        <div class="card-body" style="display: block;">
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="../app/controllers/estadomoviles/create.php" method="post">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="">Nro Móvil <font color="red">*</font></label>
                                                    <input type="text" name="nro_movil" class="form-control" id="nro_movil" required>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="">Modelo <font color="red">*</font></label>
                                                    <input type="text" name="modelo_movil" class="form-control" id="modelo_movil" required>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <!-- <label for="">Patente <font color="red">*</font></label> -->
                                                    <input type="text" style="text-transform: uppercase;" name="patente_movil" class="form-control" id="patente_movil" required hidden>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <!-- <label for="">Hora Ingreso</label> -->
                                                    <input type="text" name="entrada" class="form-control" id="entrada" hidden>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <!-- <label for="">Hora Salida</label> -->
                                                    <input type="text" name="salida" class="form-control" id="salida" hidden>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <!-- <label for="">Fecha Ingreso</label> -->
                                                    <input type="date" name="fecha" class="form-control" id="fecha" hidden>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="col">
                                            <div class="form-group">
                                                <a href="../pedidos/" class="btn btn-secondary">Cancelar</a>
                                                <button type="submit" class="btn btn-primary">Guardar</button>
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

<?php include('../layout/parte2.php'); ?>

<script>
    $(function() {
        $("#table_moviles").DataTable({
            "pageLength": 3,
            "language": {
                "emptyTable": "No hay información",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ moviles",
                "infoEmpty": "Mostrando 0 a 0 de 0 moviles",
                "infoFiltered": "(Filtrado de _MAX_ total moviles)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ moviles",
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

        }).buttons().container().appendTo('#table_moviles_wrapper .col-md-6:eq(0)');
    });
</script>