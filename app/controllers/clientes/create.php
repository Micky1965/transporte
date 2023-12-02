<?php

include('../../config.php');

$nombre_cliente = $_POST['nombre_cliente'];
$celular_cliente = $_POST['celular_cliente'];
$direccion_cliente = $_POST['direccion_cliente'];
$direccion_cliente = strtoupper($direccion_cliente);
$obs_cliente = $_POST['obs_cliente'];
$referencia_cliente = $_POST['referencia_cliente'];

$sql = "SELECT * FROM tb_clientes WHERE direccion_cliente = '$direccion_cliente'";
$query = $pdo->prepare($sql);
$query->execute();
$clientes = $query->fetchAll(PDO::FETCH_ASSOC);

foreach ($clientes as $cliente) {
    $direccion_cliente_table = $cliente['direccion_cliente'];
}
if (  (($direccion_cliente_table) == ($direccion_cliente))  ) {
       
    session_start();
    $_SESSION['mensaje'] = "Esta Dirección Ya Existe En La Base De Datos";
    $_SESSION['icono'] = "error";
    header('Location: ' . $URL . '/clientes/');
} else {

$sentencia = $pdo->prepare("INSERT INTO tb_clientes
       ( nombre_cliente, celular_cliente, direccion_cliente, referencia_cliente, obs_cliente) 
VALUES (:nombre_cliente,:celular_cliente,:direccion_cliente,:referencia_cliente,:obs_cliente)"); 

$sentencia->bindParam('nombre_cliente', $nombre_cliente);
$sentencia->bindParam('direccion_cliente', $direccion_cliente);
$sentencia->bindParam('celular_cliente', $celular_cliente);
$sentencia->bindParam('referencia_cliente', $referencia_cliente);
$sentencia->bindParam('obs_cliente', $obs_cliente);
$sentencia->execute();
session_start();
    $_SESSION['mensaje'] = "Cliente Registrado con Éxito";
    $_SESSION['icono'] = "success";
    header('Location: ' . $URL . '/clientes/');
}