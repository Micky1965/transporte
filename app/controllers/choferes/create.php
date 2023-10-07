<?php

include('../../config.php');

$nombre_chofer = $_POST['nombre_chofer'];
$dni_chofer = $_POST['dni_chofer'];
$celular_chofer = $_POST['celular_chofer'];
$direccion_chofer = $_POST['direccion_chofer'];
$rol2 = $_POST['rol2'];
$movil = $_POST['movil'];
$obs = $_POST['obs'];

$sql = "SELECT * FROM tb_choferes WHERE nombre_chofer = '$nombre_chofer' or dni_chofer = '$dni_chofer'";
$query = $pdo->prepare($sql);
$query->execute();
$choferes = $query->fetchAll(PDO::FETCH_ASSOC);

foreach ($choferes as $chofer) {
    $nombre_chofer_table = $chofer['nombre_chofer'];
    $dni_chofer_table = $chofer['dni_chofer'];
}
if (  (($nombre_chofer_table) == ($nombre_chofer) or ($dni_chofer_table) == ($dni_chofer))  ) {
    session_start();
    $_SESSION['mensaje'] = "Este chofer Ya Existe En La Base De Datos";
    $_SESSION['icono'] = "error";
    header('Location: ' . $URL . '/choferes/');
} else {

$sentencia = $pdo->prepare("INSERT INTO tb_choferes
       ( nombre_chofer, dni_chofer, celular_chofer, id_rol2, direccion_chofer, movil, obs) 
VALUES (:nombre_chofer,:dni_chofer,:celular_chofer,:id_rol2,:direccion_chofer,:movil,:obs)"); 

$sentencia->bindParam('nombre_chofer', $nombre_chofer);
$sentencia->bindParam('dni_chofer', $dni_chofer);
$sentencia->bindParam('celular_chofer', $celular_chofer);
$sentencia->bindParam('direccion_chofer', $direccion_chofer);
$sentencia->bindParam('id_rol2', $rol2);
$sentencia->bindParam('movil', $movil);
$sentencia->bindParam('obs', $obs);
$sentencia->execute();
session_start();
    $_SESSION['mensaje'] = "Chofer Registrado con Éxito";
    $_SESSION['icono'] = "success";
    header('Location: ' . $URL . '/choferes/');
}