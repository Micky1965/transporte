<?php

$id_localidad_get = $_GET['id'];

$sql_localidades = "SELECT * FROM tb_localidades WHERE id_localidad = '$id_localidad_get' ";
$query_localidades = $pdo->prepare($sql_localidades);
$query_localidades->execute();
$localidades_datos = $query_localidades->fetchAll(PDO::FETCH_ASSOC);

foreach ($localidades_datos as $localidades_dato){
    $nombre_localidad = $localidades_dato['nombre_localidad'];
    $distancia_localidad = $localidades_dato['distancia_localidad'];
    // $precio_t1 = $localidades_dato['precio_t1'];
    // $precio_t2 = $localidades_dato['precio_t2'];
    
}
