<?php

include('../../config.php');

$nro_movil = $_GET['nro_movil'];
$modelo_movil = $_GET['modelo_movil'];
$patente_movil = $_GET['patente_movil'];
$salida = $fechaHora;
$estado = '0';

$sentencia = $pdo->prepare("UPDATE tb_estadomovil SET nro_movil=:nro_movil, modelo_movil=:modelo_movil, 
                            patente_movil=:patente_movil, salida=:salida, estado=:estado 
                            WHERE nro_movil=:nro_movil");

$sentencia->bindParam(':nro_movil',$nro_movil);
$sentencia->bindParam(':modelo_movil',$modelo_movil);
$sentencia->bindParam(':patente_movil',$patente_movil);
$sentencia->bindParam(':salida',$salida);
$sentencia->bindParam(':estado',$estado);

if($sentencia->execute()){
    session_start();
    $_SESSION['mensaje'] = "El Móvil Queda Fuera de Servicio";
    $_SESSION['icono'] = "success";
?>
<script>
    window.location.href='<?=$URL?>/estadomoviles/index.php';
</script>
<?php
}else{
echo 'error al registrar a la base de datos';
}