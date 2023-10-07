<?php

include('../../config.php');

$id_user = $_POST['id_user'];

$sentencia = $pdo->prepare("DELETE FROM tb_usuarios WHERE id_user=:id_user ");

$sentencia->bindParam('id_user', $id_user);

$sentencia->execute();
session_start();
$_SESSION['mensaje'] = "Usuario Eliminado";
$_SESSION['icono'] = "success";
header('Location: ' . $URL . '/usuarios/');
