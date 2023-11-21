<?php

include('../../config.php');

$nro_movil = $_POST['nro_movil'];
$modelo_movil = $_POST['modelo_movil'];
$patente_movil = $_POST['patente_movil'];
$patente_movil = strtoupper($patente_movil);
$entrada = $_POST['entrada'];
$salida = $_POST['salida'];
$fecha = $_POST['fecha'];
$estado = 0;

$sql = "SELECT * FROM tb_estadomovil WHERE patente_movil = '$patente_movil'";
$query = $pdo->prepare($sql);
$query->execute();
$estadomovil = $query->fetchAll(PDO::FETCH_ASSOC);

foreach ($estadomovil as $estmovil) {
    $patente_estmovil_table = $estmovil['patente_movil'];
}
if (  (($patente_estmovil_table) == ($patente_movil))  ) {
    session_start();
    $_SESSION['mensaje'] = "Este Móvil Ya Fué Ingresado Anteriormente";
    $_SESSION['icono'] = "error";
    header('Location: ' . $URL . '/estadomoviles/');
    } else {

$sentencia = $pdo->prepare("INSERT INTO tb_estadomovil
                          ( nro_movil, modelo_movil, patente_movil, entrada, salida, fecha, estado) 
                   VALUES (:nro_movil,:modelo_movil,:patente_movil,:entrada,:salida,:fecha,:estado)"); 

$sentencia->bindParam('nro_movil', $nro_movil);
$sentencia->bindParam('modelo_movil', $modelo_movil);
$sentencia->bindParam('patente_movil', $patente_movil);
$sentencia->bindParam('entrada', $entrada);
$sentencia->bindParam('salida', $salida);
$sentencia->bindParam('fecha', $fecha);
$sentencia->bindParam('estado', $estado);

$sentencia->execute();
session_start();
    $_SESSION['mensaje'] = "Móvil Ingresado Con Éxito";
    $_SESSION['icono'] = "success";
    header('Location: ' . $URL . '/estadomoviles/');
}