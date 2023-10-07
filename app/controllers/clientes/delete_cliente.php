<?php

include('../../config.php');

$id_cliente = $_POST['id_cliente'];

$sentencia = $pdo->prepare("DELETE FROM tb_clientes WHERE id_cliente=:id_cliente ");

$sentencia->bindParam('id_cliente', $id_cliente);

$sentencia->execute();
session_start();
$_SESSION['mensaje'] = "Cliente Eliminado";
$_SESSION['icono'] = "success";
header('Location: ' . $URL . '/clientes/');
