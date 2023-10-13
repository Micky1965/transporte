<?php

include('../../config.php');

//$id_pedido = $_POST['id_pedido'];

$sentencia = $pdo->prepare("TRUNCATE tb_pedidos");

//$sentencia->bindParam('id_pedido', $id_pedido);

$sentencia->execute();
session_start();
$_SESSION['mensaje'] = "Lista Eliminada";
$_SESSION['icono'] = "success";
header('Location: ' . $URL . '/pedidos/');
