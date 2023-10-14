<?php

include('../../config.php');
$nombre_localidad = $_POST['nombre_localidad'];
$distancia_localidad = $_POST['distancia_localidad'];
// $precio_t1 = $_POST['precio_t1'];
// $precio_t2 = $_POST['precio_t2'];

$sql = "SELECT * FROM tb_localidades WHERE nombre_localidad = '$nombre_localidad'";
$query = $pdo->prepare($sql);
$query->execute();
$localidades = $query->fetchAll(PDO::FETCH_ASSOC);

foreach ($localidades as $localidad) {
    $nombre_localidad_tabla = $localidad['nombre_localidad'];
}
if ((($nombre_localidad_tabla) == ($nombre_localidad))) {
    //echo "<h1>Esta localidad ya existe en la base de datos </h1>";
    session_start();
    $_SESSION['mensaje'] = "Esta Localidad Ya Existe En La Base De Datos";
    $_SESSION['icono'] = "error";
    header('Location: ' . $URL . '/localidades/create.php');
} else {

    $sentencia = $pdo->prepare("INSERT INTO tb_localidades 
      ( nombre_localidad, distancia_localidad) 
VALUES(:nombre_localidad,:distancia_localidad)");

    $sentencia->bindParam(':nombre_localidad', $nombre_localidad);
    $sentencia->bindParam(':distancia_localidad', $distancia_localidad);
    // $sentencia->bindParam(':precio_t1', $precio_t1);
    // $sentencia->bindParam(':precio_t2', $precio_t2);
    $sentencia->execute();
    session_start();
    $_SESSION['mensaje'] = "Localidad Registrada con Éxito";
    $_SESSION['icono'] = "success";
    header('Location: ' . $URL . '/localidades/');
}
