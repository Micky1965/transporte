<?php

include('../../config.php');

$nro_movil = $_GET['nro_movil'];
$modelo_movil = $_GET['modelo_movil'];
$patente_movil = $_GET['patente_movil'];
$entrada = $_GET['entrada'];
$fecha = $_GET['fecha'];
$estado = '1';

$sentencia = $pdo->prepare("UPDATE tb_moviles SET nro_movil=:nro_movil, modelo_movil=:modelo_movil, 
                            patente_movil=:patente_movil, entrada=:entrada, fecha=:fecha, estado=:estado 
                            WHERE nro_movil=:nro_movil");

$sentencia->bindParam(':nro_movil',$nro_movil);
$sentencia->bindParam(':modelo_movil',$modelo_movil);
$sentencia->bindParam(':patente_movil',$patente_movil);
$sentencia->bindParam(':entrada',$entrada);
$sentencia->bindParam(':fecha',$fecha);
$sentencia->bindParam(':estado',$estado);

if($sentencia->execute()){
    session_start();
    $_SESSION['mensaje'] = "Móvil Ingresado en Servicio Correctamente";
    $_SESSION['icono'] = "success";
?>
<script>
    window.location.href='<?=$URL?>/moviles/index2.php';
</script>
<?php
}else{
echo 'error al registrar a la base de datos';
}