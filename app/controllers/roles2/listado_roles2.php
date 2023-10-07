<?php

$sql_roles2 = "SELECT * FROM tb_roles2 ";
$query_roles2 = $pdo->prepare($sql_roles2);
$query_roles2->execute();
$roles2_datos = $query_roles2->fetchAll(PDO::FETCH_ASSOC);

foreach ($roles2_datos as $roles2_dato){
    $rol2 = $roles2_dato['rol2'];
}