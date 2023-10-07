<?php

include('../../config.php');

$direccion = $_POST['direccion'];
$nombre = $_POST['nombre'];
$celular = $_POST['celular'];
$destino = $_POST['destino'];
$referencia = $_POST['referencia'];
$movil = $_POST['movil'];
$observaciones = $_POST['observaciones'];

$sentencia = $pdo->prepare("INSERT INTO tb_pedidos
                          ( direccion, nombre, celular, destino, referencia, movil, observaciones, fyh_creacion, fecha) 
                   VALUES (:direccion,:nombre,:celular,:destino,:referencia,:movil,:observaciones,:fyh_creacion,:fecha)"); 

$sentencia->bindParam('direccion', $direccion);
$sentencia->bindParam('nombre', $nombre);
$sentencia->bindParam('celular', $celular);
$sentencia->bindParam('destino', $destino);
$sentencia->bindParam('referencia', $referencia);
$sentencia->bindParam('movil', $movil);
$sentencia->bindParam('observaciones', $observaciones);
$sentencia->bindParam('fyh_creacion', $fechaHora);
$sentencia->bindParam('fecha', $fecha);
$sentencia->execute();
session_start();
    $_SESSION['mensaje'] = "Pedido Registrado con Éxito";
    $_SESSION['icono'] = "success";
    header('Location: ' . $URL . '/pedidos/');
