<?php

include('../../config.php');

$marca_movil = $_POST['marca_movil'];
$modelo_movil = $_POST['modelo_movil'];
$anio_movil = $_POST['anio_movil'];
$patente_movil = $_POST['patente_movil'];
$propietario_movil = $_POST['propietario_movil'];
$licencia_movil = $_POST['licencia_movil'];
$nro_movil = $_POST['nro_movil'];
$incorporacion = $_POST['incorporacion'];
$chofer1_movil = $_POST['chofer1_movil'];
$chofer2_movil = $_POST['chofer2_movil'];
$id_movil = $_POST['id_movil'];


$sentencia = $pdo->prepare("UPDATE tb_moviles SET marca_movil=:marca_movil, modelo_movil=:modelo_movil, anio_movil=:anio_movil, 
 patente_movil=:patente_movil, propietario_movil=:propietario_movil, licencia_movil=:licencia_movil, 
 nro_movil=:nro_movil, incorporacion=:incorporacion, chofer1_movil=:chofer1_movil, chofer2_movil=:chofer2_movil
WHERE id_movil = :id_movil ");

$sentencia->bindParam('marca_movil', $marca_movil);
$sentencia->bindParam('modelo_movil', $modelo_movil);
$sentencia->bindParam('anio_movil', $anio_movil);
$sentencia->bindParam('patente_movil', $patente_movil);
$sentencia->bindParam('propietario_movil', $propietario_movil);
$sentencia->bindParam('licencia_movil', $licencia_movil);
$sentencia->bindParam('nro_movil', $nro_movil);
$sentencia->bindParam('incorporacion', $incorporacion);
$sentencia->bindParam('chofer1_movil', $chofer1_movil);
$sentencia->bindParam('chofer2_movil', $chofer2_movil);
$sentencia->bindParam('id_movil', $id_movil);
$sentencia->execute();

session_start();
$_SESSION['mensaje'] = "Datos del Móvil Actualizados";
$_SESSION['icono'] = "success";
header('Location: ' . $URL . '/moviles/');
