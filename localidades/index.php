<?php
include('../app/config.php');
include('../layout/sesion.php');
include('../layout/parte1.php');

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-0">
                <div class="col-sm-12">

                    <a href="<?php echo $URL; ?>/localidades/create.php" class="btn btn-info" role="button" data-bs-toggle="button">
                        <i class="fas fa-map"></i><b> Agregar Localidad</b></a>

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
                        <div class="card-header">
                            <h1 class="card-title">Listado de Localidades</h1>
                        </div>

                        <div class="card-body" style="display: block;">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th style="background: #c0c0c0"><b>Nro</b></th>
                                        <th style="background: #c0c0c0"><b>Nombre Localidad</b></th>
                                        <th style="background: #c0c0c0"><b>Distancia en Kms</b></th>
                                        <th style="background: #c0c0c0"><b>Precio T1</b></th>
                                        <th style="background: #c0c0c0"><b>Precio T2-5-6</b></th>
                                        <th style="background: #c0c0c0"><b>Acciones</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query2 = $pdo->prepare("SELECT * FROM tb_localidades");
                                    $query2->execute();
                                    $localidades = $query2->fetchAll(PDO::FETCH_ASSOC);
                                    $contador = 0;
                                    foreach ($localidades as $localidad) {
                                        $id_localidad = $localidad['id_localidad'];
                                        $nombre_localidad = $localidad['nombre_localidad'];
                                        $distancia_localidad = $localidad['distancia_localidad'];
                                        $precio_t1 = $localidad['precio_t1'];
                                        $precio_t2 = $localidad['precio_t2'];
                                    ?>
                                        <tr>
                                            <td>
                                                <center><?php echo $contador = $contador + 1; ?></center>
                                            </td>
                                            <td><?php echo $nombre_localidad; ?></td>
                                            <td><?php echo $distancia_localidad; ?></td>
                                            <td><?php echo $precio_t1; ?></td>
                                            <td><?php echo $precio_t2; ?></td>
                                            <td>
                                                <a href="update.php?id=<?php echo $id_localidad; ?>" class="btn btn-success btn-sm">
                                                    <span class="fa fa-pen"></span> Editar</a>
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
        $("#example1").DataTable({
            "pageLength": 6,
            "language": {
                "emptyTable": "No hay información",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Localidades",
                "infoEmpty": "Mostrando 0 a 0 de 0 Localidades",
                "infoFiltered": "(Filtrado de _MAX_ total Localidades)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Localidades",
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

        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
</script>