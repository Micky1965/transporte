<?php
include_once '../app/config.php';
include_once '../layout/sesion.php';
include_once '../layout/parte1.php';
include_once '../app/controllers/calculadora/update_tarifa.php';

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
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">Actualización de Tarifas</h3>
                        </div>
                        <div class="card-body" style="display: block;">
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="../app/controllers/calculadora/update.php" method="post">
                                    <input type="hidden" name="id_tarifa" value="<?php echo htmlspecialchars($id_tarifa_get); ?>">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="">Bajada de Bandera T1</label>
                                                    <input type="text" name="bandera_t1" class="form-control" value="<?php echo htmlspecialchars($bandera_t1); ?>" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="">Precio del Km T1</label>
                                                    <input type="text" name="km_t1" class="form-control" value="<?php echo htmlspecialchars($km_t1); ?>" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="">Bajada de Bandera T2</label>
                                                    <input type="text" name="bandera_t2" class="form-control" value="<?php echo htmlspecialchars($bandera_t2); ?>" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="">Precio del Km T2</label>
                                                    <input type="text" name="km_t2" class="form-control" value="<?php echo htmlspecialchars($km_t2); ?>" required>
                                                </div>
                                            </div>
                                            <!-- <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Calcular Precio</label>
                                                    <input type="text" name="distancia" class="form-control" value="<?php echo htmlspecialchars($distancia); ?>" disabled>
                                                </div>
                                            </div> -->
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <a href="index.php" class="btn btn-secondary">Cancelar</a>
                                            <button type="submit" class="btn btn-success">Actualizar</button>
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

<?php include('../layout/mensajes.php'); ?>
<?php include('../layout/parte2.php'); ?>