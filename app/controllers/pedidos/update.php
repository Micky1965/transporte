<?php

include('../../config.php');

$direccion = $_POST['direccion'];
$nombre = $_POST['nombre'];
$celular = $_POST['celular'];
$destino = $_POST['destino'];
$referencia = $_POST['referencia'];
$movil = $_POST['movil'];
$observaciones = $_POST['observaciones'];
$id_pedido = $_POST['id_pedido'];


$sentencia = $pdo->prepare("UPDATE tb_pedidos SET direccion=:direccion, nombre=:nombre, celular=:celular, destino=:destino, 
                                referencia=:referencia, movil=:movil, observaciones=:observaciones 
                                WHERE id_pedido = :id_pedido ");

$sentencia->bindParam('direccion', $direccion);
$sentencia->bindParam('nombre', $nombre);
$sentencia->bindParam('celular', $celular);
$sentencia->bindParam('destino', $destino);
$sentencia->bindParam('referencia', $referencia);
$sentencia->bindParam('movil', $movil);
$sentencia->bindParam('observaciones', $observaciones);
$sentencia->bindParam('id_pedido', $id_pedido);
$sentencia->execute();
    session_start();
    $_SESSION['mensaje'] = "Datos del Pedido Actualizado";
    $_SESSION['icono'] = "success";
    header('Location: ' . $URL . '/pedidos/');
