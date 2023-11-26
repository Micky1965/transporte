<?php
include ('../app/config.php');
include ('../layout/sesion.php');
include ('../layout/parte1.php');
include ('../app/controllers/moviles/listfueraserv.php');

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
                    <div class="card card-outline card-danger">
                        <div class="card-header" style="display: flex;">
                            <h4>Móviles Fuera de Servicio</h4>
                            <div style="width: 30px"></div> 
                            <a href="../pedidos/index.php" class="btn btn-info"><b>Volver</b></a> 
                        </div>

                        <div class="card-body" style="display: block;">
                            <table id="table_moviles" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th><center>Nro</center></th>
                                    <th><center>Móvil</center></th>
                                    <th><center>Modelo</center></th>
                                    <th><center>Patente</center></th>
                                    <th><center>Salida</center></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $contador = 0;
                                foreach ($moviles_datos as $moviles_dato){
                                    $id_movil = $moviles_dato['id_movil']; ?>
                                
                                    <tr>
                                        <td><center><?php echo $contador = $contador + 1;?></center></td>
                                        <?php
                                        if ($moviles_dato['estado'] == 1) {?>
                                            <td style="background-color: #90EE90;"><center><?php echo $moviles_dato['nro_movil'];?></center></td>
                                        <?php
                                        }else{ ?>
                                            <td style="background-color: #F6635C;"><center><?php echo $moviles_dato['nro_movil'];?></center></td>
                                        <?php }?>
                                        <td><?php echo $moviles_dato['modelo_movil'];?></td>
                                        <td><?php echo $moviles_dato['patente_movil'];?></td>
                                        <td><?php echo $moviles_dato['salida'];?></td>
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
