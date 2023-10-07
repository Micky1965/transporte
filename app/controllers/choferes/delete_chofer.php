<?php

include('../../config.php');

$id_chofer = $_POST['id_chofer'];

$sentencia = $pdo->prepare("DELETE FROM tb_choferes WHERE id_chofer=:id_chofer ");

$sentencia->bindParam('id_chofer', $id_chofer);

$sentencia->execute();
session_start();
$_SESSION['mensaje'] = "Chofer Eliminado";
$_SESSION['icono'] = "success";
header('Location: ' . $URL . '/choferes/');
