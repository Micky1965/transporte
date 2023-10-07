<?php

$id_cliente_get = $_GET['id'];

$sql_clientes = "SELECT cli.id_cliente as id_cliente, cli.nombre_cliente as nombre, cli.celular_cliente as celular, 
                  cli.direccion_cliente as direccion, cli.referencia_cliente as referencia, cli.obs_cliente as obs 
                  FROM tb_clientes as cli where id_cliente = '$id_cliente_get' ";
$query_clientes = $pdo->prepare($sql_clientes);
$query_clientes->execute();
$clientes_datos = $query_clientes->fetchAll(PDO::FETCH_ASSOC);

foreach ($clientes_datos as $clientes_dato){
    $nombre_cliente = $clientes_dato['nombre'];
    $celular_cliente = $clientes_dato['celular'];
    $direccion_cliente = $clientes_dato['direccion'];
    $referencia_cliente = $clientes_dato['referencia'];
    $obs_cliente = $clientes_dato['obs'];
    
}
