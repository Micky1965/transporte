<?php

$id_movil_get = $_GET['id'];

$sql_moviles =  "SELECT mov.id_movil as id_movil, mov.marca_movil as marca, mov.modelo_movil as modelo, 
                    mov.anio_movil as anio, mov.patente_movil as patente, mov.propietario_movil as propietario, 
                    mov.licencia_movil as licencia, mov.nro_movil as nro, mov.incorporacion as incorporacion, mov.chofer1_movil as chofer1, mov.chofer2_movil as chofer2 
                    FROM tb_moviles as mov where id_movil = '$id_movil_get' ";
$query_moviles = $pdo->prepare($sql_moviles);
$query_moviles->execute();
$moviles_datos = $query_moviles->fetchAll(PDO::FETCH_ASSOC);

foreach ($moviles_datos as $moviles_dato){
    $marca_movil = $moviles_dato['marca'];
    $modelo_movil = $moviles_dato['modelo'];
    $anio_movil = $moviles_dato['anio'];
    $patente_movil = $moviles_dato['patente'];
    $propietario_movil = $moviles_dato['propietario'];
    $licencia_movil = $moviles_dato['licencia'];
    $nro_movil = $moviles_dato['nro'];
    $incorporacion = $moviles_dato['incorporacion'];
    $chofer1_movil = $moviles_dato['chofer1'];
    $chofer2_movil = $moviles_dato['chofer2'];
    
}
