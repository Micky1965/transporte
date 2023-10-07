<?php

$id_chofer_get = $_GET['id'];

$sql_choferes = "SELECT cho.id_chofer as id_chofer, cho.nombre_chofer as nombre, cho.dni_chofer as dni, cho.celular_chofer as celular, 
                cho.direccion_chofer as direccion, cho.movil as movil, cho.obs as obs, rol2.rol2 as rol2 
                FROM tb_choferes as cho INNER JOIN tb_roles2 as rol2 ON cho.id_rol2 = rol2.id_rol2 
                WHERE id_chofer = '$id_chofer_get' ";
$query_choferes = $pdo->prepare($sql_choferes);
$query_choferes->execute();
$choferes_datos = $query_choferes->fetchAll(PDO::FETCH_ASSOC);

foreach ($choferes_datos as $choferes_dato){
    $nombre_chofer = $choferes_dato['nombre'];
    $dni_chofer = $choferes_dato['dni'];
    $celular_chofer = $choferes_dato['celular'];
    $direccion_chofer = $choferes_dato['direccion'];
    $rol2 = $choferes_dato['rol2'];
    $movil = $choferes_dato['movil'];
    $obs = $choferes_dato['obs'];
}