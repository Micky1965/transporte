<?php

include('../../config.php');

$nombre_cliente = $_POST['nombre_cliente'];
$celular_cliente = $_POST['celular_cliente'];
$direccion_cliente = $_POST['direccion_cliente'];
$direccion_cliente = strtoupper($direccion_cliente);
$referencia_cliente = $_POST['referencia_cliente'];
$obs_cliente = $_POST['obs_cliente'];
$id_cliente = $_POST['id_cliente'];


$sentencia = $pdo->prepare("UPDATE tb_clientes SET nombre_cliente=:nombre_cliente, celular_cliente=:celular_cliente, 
            direccion_cliente=:direccion_cliente, referencia_cliente=:referencia_cliente, obs_cliente=:obs_cliente 
            WHERE id_cliente = :id_cliente ");

$sentencia->bindParam('nombre_cliente', $nombre_cliente);
$sentencia->bindParam('celular_cliente', $celular_cliente);
$sentencia->bindParam('direccion_cliente', $direccion_cliente);
$sentencia->bindParam('referencia_cliente', $referencia_cliente);
$sentencia->bindParam('obs_cliente', $obs_cliente);
$sentencia->bindParam('id_cliente', $id_cliente);
$sentencia->execute();
    session_start();
    $_SESSION['mensaje'] = "Datos del cliente Actualizados";
    $_SESSION['icono'] = "success";
    header('Location: ' . $URL . '/clientes/');
