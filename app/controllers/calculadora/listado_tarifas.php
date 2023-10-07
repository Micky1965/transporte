<?php

$sql_tarifas = "SELECT * FROM tb_tarifas";
$query_tarifas = $pdo->prepare($sql_tarifas);
$query_tarifas->execute();
$tarifas_datos = $query_tarifas->fetchAll(PDO::FETCH_ASSOC);

?>