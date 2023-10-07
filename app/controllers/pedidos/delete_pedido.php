<?php

include('../../config.php');

$id_pedido = $_POST['id_pedido'];

$sentencia = $pdo->prepare("DELETE FROM tb_pedidos WHERE id_pedido=:id_pedido ");

$sentencia->bindParam('id_pedido', $id_pedido);

$sentencia->execute();
session_start();
$_SESSION['mensaje'] = "Pedido Eliminado";
$_SESSION['icono'] = "success";
header('Location: ' . $URL . '/pedidos/');
