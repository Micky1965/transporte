<?php

include('../../config.php');

$direccion = $_POST['direccion'];
$nombre = $_POST['nombre'];
$celular = $_POST['celular'];
$destino = $_POST['destino'];
$referencia = $_POST['referencia'];
$movil = $_POST['movil'];
$observaciones = $_POST['observaciones'];

$sql = "SELECT * FROM tb_moviles WHERE nro_movil = '$nro_movil'";
$query = $pdo->prepare($sql);
$query->execute();
$estadomovil = $query->fetchAll(PDO::FETCH_ASSOC);

foreach ($moviles as $movil) {
    $nro_movil_table = $movil['nro_movil'];
}
if (  (($nro_movil_table) != ($nro_movil))  ) {
    session_start();
    $_SESSION['mensaje'] = "Este Móvil NO Existe en la Base de Datos";
    $_SESSION['icono'] = "error";
    header('Location: ' . $URL . '/pedidos/');
    } else {

$sentencia = $pdo->prepare("INSERT INTO tb_pedidos
                          ( direccion, nombre, celular, destino, referencia, movil, observaciones, fyh_creacion, fecha) 
                   VALUES (:direccion,:nombre,:celular,:destino,:referencia,:movil,:observaciones,:fyh_creacion,:fecha)"); 

$sentencia->bindParam('direccion', $direccion);
$sentencia->bindParam('nombre', $nombre);
$sentencia->bindParam('celular', $celular);
$sentencia->bindParam('destino', $destino);
$sentencia->bindParam('referencia', $referencia);
$sentencia->bindParam('movil', $movil);
$sentencia->bindParam('observaciones', $observaciones);
$sentencia->bindParam('fyh_creacion', $fechaHora);
$sentencia->bindParam('fecha', $fecha);
$sentencia->execute();
session_start();
    $_SESSION['mensaje'] = "Pedido Registrado con Éxito";
    $_SESSION['icono'] = "success";
    header('Location: ' . $URL . '/pedidos/');

}