<?php

include('../../config.php');

$bandera_t1 = $_POST['bandera_t1'];
$km_t1 = $_POST['km_t1'];
$bandera_t2 = $_POST['bandera_t2'];
$km_t2 = $_POST['km_t2'];
$distancia = $_POST['distancia'];
$id_tarifa = $_POST['id_tarifa'];

$sentencia = $pdo->prepare("UPDATE tb_tarifas SET bandera_t1=:bandera_t1, km_t1=:km_t1, bandera_t2=:bandera_t2,
                              km_t2=:km_t2, distancia=:distancia WHERE id_tarifa = :id_tarifa ");

$sentencia->bindParam('bandera_t1', $bandera_t1);
$sentencia->bindParam('km_t1', $km_t1);
$sentencia->bindParam('bandera_t2', $bandera_t2);
$sentencia->bindParam('km_t2', $km_t2);
$sentencia->bindParam('distancia', $distancia);
$sentencia->bindParam('id_tarifa', $id_tarifa);

$sentencia->execute();
    session_start();
    $_SESSION['mensaje'] = "Tarifa Actualizada con Éxito";
    $_SESSION['icono'] = "success";
    header('Location: ' . $URL . '/calculadora/');
