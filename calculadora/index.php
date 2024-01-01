<?php
include ('../app/config.php');
include ('../layout/sesion.php');
include ('../layout/parte1.php');
include ('../app/controllers/calculadora/listado_tarifas.php');

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
                            <h2><b>Tarifa Actual</b></h2> 
                        </div>

                        <div class="card-body" style="display: block;">
                            <table id="table_tarifas" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th><center>Bajada de Bandera T1</center></th>
                                    <th><center>Precio del Km T1</center></th>
                                    <th><center>Bajada de Bandera T2</center></th>
                                    <th><center>Precio del Km T2</center></th>
                                    <th><center>Acciones</center></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach ($tarifas_datos as $tarifas_dato){
                                    $id_tarifa = $tarifas_dato['id_tarifa']; ?>
                                    <tr>
                                        <td><?php echo $tarifas_dato['bandera_t1'];?></td>
                                        <td><?php echo $tarifas_dato['km_t1'];?></td>
                                        <td><?php echo $tarifas_dato['bandera_t2'];?></td>
                                        <td><?php echo $tarifas_dato['km_t2'];?></td>
                                        <td>
                                            <center>
                                                <div class="btn-group">
                                                    <a href="update.php?id=<?php echo $id_tarifa; ?>" type="button" class="btn btn-success btn-sm"><i class="fa fa-pencil-alt"> Editar</i></a>
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