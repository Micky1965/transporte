<?php
include('../app/config.php');
include('../layout/sesion.php');
include('../layout/parte1.php');
include('../app/controllers/clientes/listado_clientes.php');
include('../app/controllers/moviles/listenservicio.php');

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-0">
                <div class="col-sm-12">
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-listacli">
                        <i class="fas fa-male"></i> Buscar Cliente
                    </button>
                    <!-- Modal para seleccionar cliente e insertarlo en los pedidos de móviles -->
                    <div class="modal fade" id="modal-listacli">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title"><b>Clientes</b></h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="table table-responsive">
                                        <table id="table_clientes" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th><center>Seleccionar</center></th>
                                                    <th><center>Dirección</center></th>
                                                    <th><center>Apellido</center></th>
                                                    <th><center>Celular</center></th>
                                                    <th><center>Referencias</center></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                foreach ($clientes_datos as $clientes_dato) {
                                                    $id_cliente = $clientes_dato['id_cliente']; ?>
                                                    <tr>
                                                        <td>
                                                            <button class="btn btn-info btn-sm" id="btn_escoger<?php echo $id_cliente; ?>">
                                                                Escoger
                                                            </button>
                                                            <script>
                                                                $('#btn_escoger<?php echo $id_cliente; ?>').click(function() {

                                                                    var direccion = "<?php echo $clientes_dato['direccion']; ?>";
                                                                    $('#direccion').val(direccion);
                                                                    var nombre = "<?php echo $clientes_dato['nombre']; ?>";
                                                                    $('#nombre').val(nombre);
                                                                    var celular = "<?php echo $clientes_dato['celular']; ?>";
                                                                    $('#celular').val(celular);
                                                                    var referencia = "<?php echo $clientes_dato['referencia']; ?>";
                                                                    $('#referencia').val(referencia);
                                                                    $('#modal-listacli').modal('toggle');
                                                                });
                                                            </script>
                                                        </td>
                                                        <td><?php echo $clientes_dato['direccion']; ?></td>
                                                        <td><?php echo $clientes_dato['nombre']; ?></td>
                                                        <td><?php echo $clientes_dato['celular']; ?></td>
                                                        <td><?php echo $clientes_dato['referencia']; ?></td>
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
                    <!-- /.modal fin seleccion de cliente  -->
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
                            <h4>Registrar Pedido de Móvil</h4>
                        </div>

                        <div class="card-body" style="display: block;">
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="../app/controllers/pedidos/create.php" method="post">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="">Dirección <font color="red">*</font></label>
                                                    <input type="text" name="direccion" class="form-control" id="direccion" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="">Apellido <font color="red">*</font></label>
                                                    <input type="text" name="nombre" class="form-control" id="nombre" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="">Celular</label>
                                                    <input type="number" name="celular" class="form-control" id="celular">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="">Referencias</label>
                                                    <input type="text" name="referencia" class="form-control" id="referencia">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="">Destino</label>
                                                    <input type="text" name="destino" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="">Móvil <font color="red">*</font></label>
                                                    <!-- <input type="text" name="movil" class="form-control" id="movil" required> -->
                                                    <select name="movil" id="movil" class="form-control">
                                                        <?php
                                                        foreach ($moviles_datos as $moviles_dato) { ?>
                                                            <option value="<?php echo $moviles_dato['id_movil']; ?>"><?php echo $moviles_dato['nro_movil']; ?></option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Observaciones</label>
                                                    <input type="text" name="observaciones" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="col">
                                            <div class="form-group">
                                                <a href="index.php" class="btn btn-secondary">Cancelar</a>
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
        $("#table_clientes").DataTable({
            "pageLength": 3,
            "language": {
                "emptyTable": "No hay información",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ clientes",
                "infoEmpty": "Mostrando 0 a 0 de 0 clientes",
                "infoFiltered": "(Filtrado de _MAX_ total clientes)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ clientes",
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

        }).buttons().container().appendTo('#table_clientes_wrapper .col-md-6:eq(0)');
    });
</script>