<?php

include('../../config.php');

$nombre_chofer = $_POST['nombre_chofer'];
$dni_chofer = $_POST['dni_chofer'];
$celular_chofer = $_POST['celular_chofer'];
$direccion_chofer = $_POST['direccion_chofer'];
$rol2 = $_POST['rol2'];
$movil = $_POST['movil'];
$obs = $_POST['obs'];
$id_chofer = $_POST['id_chofer'];


$sentencia = $pdo->prepare("UPDATE tb_choferes SET nombre_chofer=:nombre_chofer, dni_chofer=:dni_chofer, 
                            celular_chofer=:celular_chofer, direccion_chofer=:direccion_chofer, id_rol2=:id_rol2, 
                            movil=:movil, obs=:obs 
                            WHERE id_chofer = :id_chofer ");

$sentencia->bindParam('nombre_chofer', $nombre_chofer);
$sentencia->bindParam('dni_chofer', $dni_chofer);
$sentencia->bindParam('celular_chofer', $celular_chofer);
$sentencia->bindParam('direccion_chofer', $direccion_chofer);
$sentencia->bindParam('id_rol2', $rol2);
$sentencia->bindParam('movil', $movil);
$sentencia->bindParam('obs', $obs);
$sentencia->bindParam('id_chofer', $id_chofer);
$sentencia->execute();
    session_start();
    $_SESSION['mensaje'] = "Datos del Chofer Actualizados";
    $_SESSION['icono'] = "success";
    header('Location: ' . $URL . '/choferes/');
