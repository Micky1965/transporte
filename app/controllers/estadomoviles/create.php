<?php

include('../../config.php');

$nro_movil = $_POST['nro_movil'];
$modelo_movil = $_POST['modelo_movil'];
$patente_movil = $_POST['patente_movil'];
$entrada = $_POST['entrada'];
$salida = $_POST['salida'];
$fecha = $_POST['fecha'];
$movil = $_POST['movil'];
$estado = 0;

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
    $_SESSION['mensaje'] = "Ingresado con Éxito";
    $_SESSION['icono'] = "success";
    header('Location: ' . $URL . '/estadomovil/');
