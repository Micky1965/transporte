<?php

$sql_moviles = "SELECT * FROM tb_moviles WHERE estado = 0 ORDER BY nro_movil ASC";
$query_moviles = $pdo->prepare($sql_moviles);
$query_moviles->execute();
$moviles_datos = $query_moviles->fetchAll(PDO::FETCH_ASSOC);

?>