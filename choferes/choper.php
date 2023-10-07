<?php
include ('../app/config.php');
include ('../layout/sesion.php');
include ('../layout/parte1.php');
include ('../app/controllers/choferes/listado_choferes.php');
include ('../app/controllers/roles2/listado_roles2.php');

?>

<!-- ESTE ARCHIVO FUE CREADO PARA SER VISTO OR EL ROL 2 (operador), "tiene acceso restringido a las ACCIONES"    
    Content Wrapper. Contains page content -->
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
                            <h3 class="card-title">Listado de Choferes</h3> 
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>

                        <div class="card-body" style="display: block;">
                            <table id="table_choferes" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th><center>Nro</center></th>
                                    <th><center>Nombre</center></th>
                                    <th><center>Dni</center></th>
                                    <th><center>Celular</center></th>
                                    <th><center>Dirección</center></th>
                                    <th><center>Rol del Conductor</center></th>
                                    <th><center>Móvil</center></th>
                                    <th><center>Observ</center></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $contador = 0;
                                foreach ($choferes_datos as $choferes_dato){
                                    $id_chofer = $choferes_dato['id_chofer']; ?>
                                    <tr>
                                        <td><center><?php echo $contador = $contador + 1;?></center></td>
                                        <td><?php echo $choferes_dato['nombre'];?></td>
                                        <td><?php echo $choferes_dato['dni'];?></td>
                                        <td><?php echo $choferes_dato['celular'];?></td>
                                        <td><?php echo $choferes_dato['direccion'];?></td>
                                        <td><?php echo $choferes_dato['rol2'];?></td>
                                        <td><?php echo $choferes_dato['movil'];?></td>
                                        <td><?php echo $choferes_dato['obs'];?></td>
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



<script>
    $(function () {
        $("#table_choferes").DataTable({
            "pageLength": 3,
            "language": {
                "emptyTable": "No hay información",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Choferes",
                "infoEmpty": "Mostrando 0 a 0 de 0 Choferes",
                "infoFiltered": "(Filtrado de _MAX_ total Choferes)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Choferes",
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
            "responsive": true, "lengthChange": true, "autoWidth": false,
            
            buttons: [{
                extend: 'collection',
                text: 'Reportes',
                orientation: 'landscape',
                buttons: [{
                    text: 'Copiar',
                    extend: 'copy',
                }, {
                    extend: 'pdf'
                },{
                    extend: 'excel'
                },{
                    text: 'Imprimir',
                    extend: 'print'
                }
                ]
            },
            ],
        }).buttons().container().appendTo('#table_choferes_wrapper .col-md-6:eq(0)');
    });
</script>
