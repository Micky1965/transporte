<?php

include('../../config.php');

$marca_movil = $_POST['marca_movil'];
$modelo_movil = $_POST['modelo_movil'];
$anio_movil = $_POST['anio_movil'];
$patente_movil = $_POST['patente_movil'];
$patente_movil = strtoupper($patente_movil);
$propietario_movil = $_POST['propietario_movil'];
$licencia_movil = $_POST['licencia_movil'];
$nro_movil = $_POST['nro_movil'];
$incorporacion = $_POST['incorporacion'];
$chofer1_movil = $_POST['chofer1_movil'];
$chofer2_movil = $_POST['chofer2_movil'];
$estado = 0;

$sql = "SELECT * FROM tb_moviles";
$query = $pdo->prepare($sql);
$query->execute();
$moviles = $query->fetchAll(PDO::FETCH_ASSOC);

foreach ($moviles as $movil) {
    $patente_movil_table = $movil['patente_movil'];
    $licencia_movil_table = $movil['licencia_movil'];
}
if ((($patente_movil_table) == ($patente_movil))) {
    session_start();
    $_SESSION['mensaje'] = "Esta Patente Ya Existe En La Base De Datos";
    $_SESSION['icono'] = "error";
    header('Location: ' . $URL . '/moviles/');
} else if ((($licencia_movil_table) == ($licencia_movil))) {
    session_start();
    $_SESSION['mensaje'] = "Esta Licencia Está Vinculada con Otro Móvil";
    $_SESSION['icono'] = "error";
    header('Location: ' . $URL . '/moviles/');
} else {

    $sentencia = $pdo->prepare("INSERT INTO tb_moviles
       ( marca_movil, modelo_movil, anio_movil, patente_movil, propietario_movil, licencia_movil, nro_movil, chofer1_movil, chofer2_movil, incorporacion) 
VALUES (:marca_movil,:modelo_movil,:anio_movil,:patente_movil,:propietario_movil,:licencia_movil,:nro_movil,:chofer1_movil,:chofer2_movil,:incorporacion)");

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
    $sentencia->execute();

    session_start();
    $_SESSION['mensaje'] = "Móvil Registrado con Éxito";
    $_SESSION['icono'] = "success";
    header('Location: ' . $URL . '/moviles/');
}
