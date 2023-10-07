<?php

$id_pedido_get = $_GET['id'];

$sql_pedidos =  "SELECT pe.id_pedido as id_pedido, pe.direccion as direccion, pe.nombre as nombre, pe.celular as celular, 
                    pe.destino as destino, pe.referencia as referencia, pe.movil as movil, pe.observaciones as observaciones 
                    FROM tb_pedidos as pe where id_pedido = '$id_pedido_get' ";
$query_pedidos = $pdo->prepare($sql_pedidos);
$query_pedidos->execute();
$pedidos_datos = $query_pedidos->fetchAll(PDO::FETCH_ASSOC);

foreach ($pedidos_datos as $pedidos_dato){
    $direccion = $pedidos_dato['direccion'];
    $nombre = $pedidos_dato['nombre'];
    $celular = $pedidos_dato['celular'];
    $destino = $pedidos_dato['destino'];
    $referencia = $pedidos_dato['referencia'];
    $movil = $pedidos_dato['movil'];
    $observaciones = $pedidos_dato['observaciones'];
    
}