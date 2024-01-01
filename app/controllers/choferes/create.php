<?php

include('../../config.php');

$nombre_chofer = $_POST['nombre_chofer'];
$dni_chofer = $_POST['dni_chofer'];
$celular_chofer = $_POST['celular_chofer'];
$direccion_chofer = $_POST['direccion_chofer'];
$rol2 = $_POST['rol2'];
$obs = $_POST['obs'];
$movil_chofer = $_POST['movil_chofer'];
$estado = 0;

$sql = "SELECT * FROM tb_choferes WHERE dni_chofer = '$dni_chofer'";
$query = $pdo->prepare($sql);
$query->execute();
$choferes = $query->fetchAll(PDO::FETCH_ASSOC);

foreach ($choferes as $chofer) {
    $dni_chofer_table = $chofer['dni_chofer'];
}
if (  (($dni_chofer_table) == ($dni_chofer))  ) {
    session_start();
    $_SESSION['mensaje'] = "Este DNI Ya Existe En La Base De Datos";
    $_SESSION['icono'] = "error";
    header('Location: ' . $URL . '/choferes/');
} else {

$sentencia = $pdo->prepare("INSERT INTO tb_choferes
       ( nombre_chofer, dni_chofer, celular_chofer, id_rol2, direccion_chofer, obs, movil_chofer) 
VALUES (:nombre_chofer,:dni_chofer,:celular_chofer,:id_rol2,:direccion_chofer,:obs,:movil_chofer)"); 

$sentencia->bindParam('nombre_chofer', $nombre_chofer);
$sentencia->bindParam('dni_chofer', $dni_chofer);
$sentencia->bindParam('celular_chofer', $celular_chofer);
$sentencia->bindParam('direccion_chofer', $direccion_chofer);
$sentencia->bindParam('id_rol2', $rol2);
$sentencia->bindParam('obs', $obs);
$sentencia->bindParam('movil_chofer', $movil_chofer);
$sentencia->execute();
session_start();
    $_SESSION['mensaje'] = "Chofer Registrado con Éxito";
    $_SESSION['icono'] = "success";
    header('Location: ' . $URL . '/choferes/');
}