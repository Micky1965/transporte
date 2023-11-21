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
                            <h3 class="card-title"><a href="../reportes/estmovlist.php" class="link"><b>Estado de los Móviles</b></a></h3>
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
                                    <th><center>Hora Ingreso</center></th>
                                    <th><center>Fecha Ingreso </center></th>
                                    <th><center>Hora Salida</center></th>
                                    <th><center>Acciones</center></th>
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
                                            <td style="background-color: #90EE90;"><center><?php echo $estadomovil_dato['nro_movil'];?></center></td>
                                        <?php
                                        }else{ ?>
                                            <td style="background-color: #F6635C;"><center><?php echo $estadomovil_dato['nro_movil'];?></center></td>
                                        <?php }?>
                                        <td><?php echo $estadomovil_dato['modelo_movil'];?></td>
                                        <td><?php echo $estadomovil_dato['patente_movil'];?></td>
                                        <td><?php echo $estadomovil_dato['entrada'];?></td>
                                        <td><?php echo $estadomovil_dato['fecha'];?></td>
                                        <td><?php echo $estadomovil_dato['salida'];?></td>
                                        <td>
                                            
                                            <center>
                                                <?php
                                                if ($estadomovil_dato['estado'] == 1) {?>
                                                    <button class="btn btn-danger" type="button" data-toggle="modal" 
                                                        data-target="#modal2<?php echo $id_estadomovil;?>">Finalizar
                                                    </button>
                                                    
                                                <?php
                                                }else{ ?>
                                                    <button class="btn btn-success" type="button" data-toggle="modal" 
                                                        data-target="#modal<?php echo $id_estadomovil;?>">Comenzar
                                                    </button>
                                                <?php }?>
                                                <!-- Button trigger modal -->
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="modal<?php echo $id_estadomovil;?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                        <div class="modal-header" style="background-color: #90EE90;">
                                                            <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-car-side"></i> Comenzar Servicio</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label for="">Móvil</label>
                                                                            <input type="text" id="nro_movil<?php echo $id_estadomovil;?>" class="form-control" value="<?php echo $estadomovil_dato['nro_movil'];?>" disabled>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label for="">Modelo</label>
                                                                            <input type="text" id="modelo_movil<?php echo $id_estadomovil;?>" class="form-control" value="<?php echo $estadomovil_dato['modelo_movil'];?>" disabled>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label for="">Patente</label>
                                                                            <input type="text" id="patente_movil<?php echo $id_estadomovil;?>" class="form-control" value="<?php echo $estadomovil_dato['patente_movil'];?>" disabled>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <label for="">Hora Ingreso</label>
                                                                            <?php
                                                                            $fechaHora = date('H:i:s');
                                                                            ?>
                                                                            <input type="text" id="entrada<?php echo $id_estadomovil;?>" class="form-control" value="<?php echo $fechaHora;?>" disabled>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label for="">Fecha Ingreso</label>
                                                                            <?php 
                                                                            $fecha = date('Y/m/d');
                                                                            $dia = date('d');
                                                                            $mes = date('m');
                                                                            $anio = date('Y');
                                                                            ?>
                                                                            <input type="date" id="fecha<?php echo $id_estadomovil;?>" class="form-control" value="<?php echo $anio."-".$mes."-".$dia;?>" disabled>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-5">
                                                                        <div class="form-group">
                                                                            <label for="">Estado</label>
                                                                            <select name="" id="estado<?php echo $id_estadomovil;?>" class="form-control">
                                                                                <option value="1">Comenzar Servicio</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-success" id="btn_confirmar<?php echo $id_estadomovil;?>">Confirmar</button>
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                            <script>
                                                                $("#btn_confirmar<?php echo $id_estadomovil;?>").click(function(){
                                                                    var nro_movil = $("#nro_movil<?php echo $id_estadomovil;?>").val();
                                                                    var modelo_movil = $("#modelo_movil<?php echo $id_estadomovil;?>").val();
                                                                    var patente_movil = $("#patente_movil<?php echo $id_estadomovil;?>").val();
                                                                    var entrada = $("#entrada<?php echo $id_estadomovil;?>").val();
                                                                    var fecha = $("#fecha<?php echo $id_estadomovil;?>").val();
                                                                    var estado = $("#estado<?php echo $id_estadomovil;?>").val();
                                                                    //alert(nro_movil + " " + modelo_movil + " " + entrada + " " + fecha + " " + estado); 
                                                                    var url = "../app/controllers/estadomoviles/update1.php";
                                                                    $.get(url,{nro_movil:nro_movil,modelo_movil:modelo_movil,patente_movil:patente_movil,entrada:entrada,fecha:fecha,estado:estado},function(result){
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
                                                    
                                                    <!-- Aqui Termina las aciiones del boton de Comenzar servicio -->
                                                                
                                                    <!-- Aqui comienza el boton de finalizar servicio -->

                                                <!-- Button trigger modal -->
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="modal2<?php echo $id_estadomovil;?>" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                        <div class="modal-header" style="background-color: #F6635C;">
                                                            <h5 class="modal-title" id="exampleModalLabel2"><i class="fas fa-ban"></i> Finalizar Servicio</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label for="">Móvil</label>
                                                                            <input type="text" id="nro_movil<?php echo $id_estadomovil;?>" class="form-control" value="<?php echo $estadomovil_dato['nro_movil'];?>" disabled>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label for="">Modelo</label>
                                                                            <input type="text" id="modelo_movil<?php echo $id_estadomovil;?>" class="form-control" value="<?php echo $estadomovil_dato['modelo_movil'];?>" disabled>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label for="">Patente</label>
                                                                            <input type="text" id="patente_movil<?php echo $id_estadomovil;?>" class="form-control" value="<?php echo $estadomovil_dato['patente_movil'];?>" disabled>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <label for="">Hora Ingreso</label>
                                                                            <input type="text" id="entrada<?php echo $id_estadomovil;?>" class="form-control" value="<?php echo $estadomovil_dato['entrada'];?>" disabled>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label for="">Hora Salida</label>
                                                                            <?php
                                                                            $fechaHora = date('H:i:s');
                                                                            ?>
                                                                            <input type="text" id="salida<?php echo $id_estadomovil;?>" class="form-control" value="<?php echo $fechaHora;?>" disabled>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-5">
                                                                        <div class="form-group">
                                                                            <label for="">Estado</label>
                                                                            <select name="" id="estado<?php echo $id_estadomovil;?>" class="form-control">
                                                                                <option value="0">Finalizar Servicio</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger" id="btn_confirmarf<?php echo $id_estadomovil;?>">Confirmar</button>
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                            <script>
                                                                $("#btn_confirmarf<?php echo $id_estadomovil;?>").click(function(){
                                                                    var nro_movil = $("#nro_movil<?php echo $id_estadomovil;?>").val();
                                                                    var modelo_movil = $("#modelo_movil<?php echo $id_estadomovil;?>").val();
                                                                    var patente_movil = $("#patente_movil<?php echo $id_estadomovil;?>").val();
                                                                    var entrada = $("#entrada<?php echo $id_estadomovil;?>").val();
                                                                    var salida = $("#salida<?php echo $id_estadomovil;?>").val();
                                                                    var fecha = $("#fecha<?php echo $id_estadomovil;?>").val();
                                                                    var estado = $("#estado<?php echo $id_estadomovil;?>").val();
                                                                    //alert(nro_numero + " " + modelo_numero + " " + entrada + " " + salida + " " + fecha + " " + estado);
                                                                    var url = "../app/controllers/estadomoviles/update2.php";
                                                                    $.get(url,{nro_movil:nro_movil,modelo_movil:modelo_movil,patente_movil:patente_movil,salida:salida,estado:estado},function(dato){
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
                                
<?php include ('../layout/mensajes.php'); ?>
<?php include ('../layout/parte2.php'); ?>