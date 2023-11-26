<?php

include('../../config.php');

$id_movil = $_POST['id_movil'];

$sentencia = $pdo->prepare("DELETE FROM tb_moviles WHERE id_movil=:id_movil ");

$sentencia->bindParam('id_movil', $id_movil);

$sentencia->execute();

session_start();
$_SESSION['mensaje'] = "Móvil Eliminado";
$_SESSION['icono'] = "success";
header('Location: ' . $URL . '/moviles/');
