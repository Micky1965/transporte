<?php
include('../app/config.php');
include('../layout/sesion.php');
include('../layout/parte1.php');
include('../app/controllers/choferes/listado_estadochoferes.php');

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
                            <div style="width: 30px"></div>
                            <a href="../choferes/index.php" class="btn btn-info"><b>Volver</b></a>
                        </div>

                        <div class="card-body" style="display: block;">
                            <table id="table_choferes" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th><center>Nro</center></th>
                                        <th><center>Nombre</center></th>
                                        <th><center>DNI</center></th>
                                        <th><center>Dirección</center></th>
                                        <th><center>Celular</center></th>
                                        <th><center>Movil</center></th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    $contador = 0;
                                    foreach ($choferes_datos as $choferes_dato) {
                                        $id_chofer = $choferes_dato['id_chofer']; ?>

                                        <tr>
                                            <td>
                                                <center><?php echo $contador = $contador + 1; ?></center>
                                            </td>
                                            <?php
                                            if ($choferes_dato['estado'] == 1) { ?>
                                                <td style="background-color: #F6635C;">
                                                    <center><?php echo $choferes_dato['nombre_chofer']; ?></center>
                                                </td>
                                            <?php
                                            } else { ?>
                                                <td style="background-color: #90EE90;">
                                                    <center><?php echo $choferes_dato['nombre_chofer']; ?></center>
                                                </td>
                                            <?php } ?>
                                            <td><?php echo $choferes_dato['dni_chofer']; ?></td>
                                            <td><?php echo $choferes_dato['direccion_chofer']; ?></td>
                                            <td><?php echo $choferes_dato['celular_chofer']; ?></td>
                                            <td><?php echo $choferes_dato['movil_chofer']; ?></td>
                                            <td>

                                                <center>
                                                    <?php
                                                    if ($choferes_dato['estado'] == 1) { ?>
                                                        <button class="btn btn-danger" type="button" data-toggle="modal" data-target="#modal2<?php echo $id_chofer; ?>">Desocupar
                                                        </button>

                                                    <?php
                                                    } else { ?>
                                                        <button class="btn btn-success" type="button" data-toggle="modal" data-target="#modal<?php echo $id_chofer; ?>">Ocupar
                                                        </button>
                                                    <?php } ?>
                                                    <!-- Button trigger modal -->
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="modal<?php echo $id_chofer; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header" style="background-color: #90EE90;">
                                                                    <h5 class="modal-title" id="exampleModalLabel"> Ocupar Chofer ?</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="form-group">
                                                                        <div class="row">
                                                                            <div class="col-md-9">
                                                                                <div class="form-group">
                                                                                    <label for="">Nombre</label>
                                                                                    <input type="text" id="nombre_chofer<?php echo $id_chofer; ?>" class="form-control" value="<?php echo $choferes_dato['nombre_chofer']; ?>" disabled>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="form-group">
                                                                                    <label for="">DNI</label>
                                                                                    <input type="text" id="dni_chofer<?php echo $id_chofer; ?>" class="form-control" value="<?php echo $choferes_dato['dni_chofer']; ?>" disabled>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="form-group">
                                                                                    <label for="">Estado</label>
                                                                                    <select name="" id="estado<?php echo $id_movil; ?>" class="form-control">
                                                                                        <option value="0">Ocuparse</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-success" id="btn_confirmar<?php echo $id_chofer; ?>">Confirmar</button>
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                                    <script>
                                                                        $("#btn_confirmar<?php echo $id_chofer; ?>").click(function() {
                                                                            var nombre_chofer = $("#nombre_chofer<?php echo $id_chofer; ?>").val();
                                                                            var dni_chofer = $("#dni_chofer<?php echo $id_chofer; ?>").val();
                                                                            var estado = $("#estado<?php echo $id_chofer; ?>").val();
                                                                            var url = "../app/controllers/choferes/ocuparse.php";
                                                                            $.get(url, {
                                                                                nombre_chofer: nombre_chofer,
                                                                                dni_chofer: dni_chofer,
                                                                                estado: estado
                                                                            }, function(result) {
                                                                                $("#respuesta_comenzar").html(result);
                                                                            });
                                                                        });
                                                                    </script>
                                                                </div>
                                                                <div id="respuesta_comenzar">

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Aqui Termina las acciones del boton de Comenzar servicio -->

                                                    <!-- Aqui comienza el boton de liberar chofer -->

                                                    <!-- Button trigger modal -->
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="modal2<?php echo $id_chofer; ?>" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header" style="background-color: #F6635C;">
                                                                    <h5 class="modal-title" id="exampleModalLabel2"> Desocupar Chofer ?</h5>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="form-group">
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label for="">Nombre</label>
                                                                                    <input type="text" id="nombre_chofer<?php echo $id_chofer; ?>" class="form-control" value="<?php echo $choferes_dato['nombre_chofer']; ?>" disabled>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="form-group">
                                                                                    <label for="">DNI</label>
                                                                                    <input type="text" id="dni_chofer<?php echo $id_chofer; ?>" class="form-control" value="<?php echo $choferes_dato['dni_chofer']; ?>" disabled>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="form-group">
                                                                                    <label for="">Estado</label>
                                                                                    <select name="" id="estado<?php echo $id_movil; ?>" class="form-control">
                                                                                        <option value="1">Desocupar</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-danger" id="btn_confirmarf<?php echo $id_chofer; ?>">Confirmar</button>
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                                    <script>
                                                                        $("#btn_confirmarf<?php echo $id_chofer; ?>").click(function() {
                                                                            var nombre_chofer = $("#nombre_chofer<?php echo $id_chofer; ?>").val();
                                                                            var dni_chofer = $("#dni_chofer<?php echo $id_chofer; ?>").val();
                                                                            var estado = $("#estado<?php echo $id_chofer; ?>").val();
                                                                            var url = "../app/controllers/choferes/liberar.php";
                                                                            $.get(url, {
                                                                                nombre_chofer: nombre_chofer,
                                                                                dni_chofer: dni_chofer,
                                                                                estado: estado
                                                                            }, function(dato) {
                                                                                $("#respuesta_finalizar").html(dato);
                                                                            });
                                                                        });
                                                                    </script>
                                                                </div>
                                                                <div id="respuesta_finalizar">

                                                                </div>
                                                            </div>
                                                        </div>
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