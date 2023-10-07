<?php
include('../app/config.php');
include('../layout/sesion.php');
include('../layout/parte1.php');

$query2 = $pdo->prepare("SELECT * FROM tb_tarifas");
$query2->execute();
$tarifas = $query2->fetchAll(PDO::FETCH_ASSOC);
foreach ($tarifas as $tarifa) {
    $bandera_t1 = $tarifa['bandera_t1'];
    $km_t1 = $tarifa['km_t1'];
    $bandera_t2 = $tarifa['bandera_t2'];
    $km_t2 = $tarifa['km_t2'];
    $viaje = $tarifa["distancia"];
}
?>

<!DOCTYPE html>
<html>

<head>
    
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-12">
                            <br>

                            <div class="card card-warning card-outline">
                                <div class="card-header">
                                    <h3 class="card-title"><span class="fa fa-calculator"></span> <b>Precio Aproximado del Viaje</b></h3>
                                </div>
                                <br>
                                <form action="precios.php" method="POST">
                                    
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for=""> Bajada de Bandera T1</label>
                                                <input type="number" class="form-control" style="text-align: center; font-weight:bold; background-color:#F6FA70" value="<?php echo $bandera_t1; ?>" disabled>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="">Precio del Km T1</label>
                                                <input type="number" class="form-control" style="text-align: center; font-weight:bold; background-color:#F6FA70" value="<?php echo $km_t1; ?>" disabled>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for=""> Bajada de Bandera T2</label>
                                                <input type="number" class="form-control" style="text-align: center; font-weight:bold; background-color:#4682B4; color:#FFFFFF" value="<?php echo $bandera_t2; ?>" disabled>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="">Precio del Km T2</label>
                                                <input type="number" class="form-control" style="text-align: center; font-weight:bold; background-color:#4682B4; color:#FFFFFF" value="<?php echo $km_t2; ?>" disabled>
                                            </div>
                                        </div>
                                        
                                        <div class="col-3"><br><br>
                                            <div class="form-group">
                                                <label for="">Calcular Precio</label>
                                                <input type="number" class="form-control" name="distancia" style="text-align: center; font-weight:bold; background-color:#E8F3D6" placeholder="Ingrese los Kms">
                                            </div>
                                            <?php
                                            if ($_POST) {
                                                $viaje = $_POST["distancia"];
                                                if ($viaje >= "0") {
                                                    $total_aproximado = $km_t1 * $viaje + $bandera_t1;
                                                    $total_aproximado2 = $km_t2 * $viaje + $bandera_t2;
                                                } else {
                                                    print "El Kilometraje debe ser Mayor que 0";
                                                }
                                            }
                                            ?>
                                        </div>
                                        <div class="col-3"><br><br>
                                            <div class="form-group">
                                                <label for="">Total Aproximado T1</label>
                                                <input type="number" class="form-control" id="total_aproximado" style="text-align: center; font-weight:bold; background-color:#F6FA70" value="<?php echo $total_aproximado; ?>" disabled>
                                            </div>
                                        </div>
                                        <div class="col-3"><br><br>
                                            <div class="form-group">
                                                <label for="">Total Aproximado T2</label>
                                                <input type="number" class="form-control" id="total_aproximado2" style="text-align: center; background-color:#4682B4; color:#FFFFFF" value="<?php echo $total_aproximado2; ?>" disabled>
                                            </div>
                                        </div>
                                        
                                    </div><br><br>
                                    <p><input type="submit" class="btn btn-warning btn-lg" value="Calcular"></p>
                                </form>
                            </div>
                        </div>
                    </div><!-- /.container-fluid -->
                </div>

            </section><!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
    </div>
</body>
<?php include('../layout/parte2.php'); ?>
</html>