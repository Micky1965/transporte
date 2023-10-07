<?php

$sql_moviles = "SELECT mov.id_movil as id_movil, mov.marca_movil as marca, mov.modelo_movil as modelo, 
                mov.anio_movil as anio, mov.patente_movil as patente, mov.propietario_movil as propietario, 
                mov.licencia_movil as licencia, mov.nro_movil as nro, mov.incorporacion as incorporacion, mov.chofer1_movil as chofer1, 
                mov.chofer2_movil as chofer2 FROM tb_moviles as mov ORDER BY incorporacion DESC";
$query_moviles = $pdo->prepare($sql_moviles);
$query_moviles->execute();
$moviles_datos = $query_moviles->fetchAll(PDO::FETCH_ASSOC);

?>