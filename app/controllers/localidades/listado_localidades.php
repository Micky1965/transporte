<?php

$sql_localidades = "SELECT * FROM tb_localidades";
$query_localidades = $pdo->prepare($sql_localidades);
$query_localidades->execute();
$localidades_datos = $query_localidades->fetchAll(PDO::FETCH_ASSOC);

?>