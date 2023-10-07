<?php

$id_tarifa_get = $_GET['id'];

$sql_tarifas = "SELECT * FROM tb_tarifas WHERE id_tarifa = '$id_tarifa_get'";
$query_tarifas = $pdo->prepare($sql_tarifas);
$query_tarifas->execute();
$tarifas_datos = $query_tarifas->fetchAll(PDO::FETCH_ASSOC);

foreach ($tarifas_datos as $tarifas_dato){
    $bandera_t1 = $tarifas_dato['bandera_t1'];
    $km_t1 = $tarifas_dato['km_t1'];
    $bandera_t2 = $tarifas_dato['bandera_t2'];
    $km_t2 = $tarifas_dato['km_t2'];
    $distancia = $tarifas_dato['distancia'];
    
}
