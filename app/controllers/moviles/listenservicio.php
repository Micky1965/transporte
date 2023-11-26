<?php

$sql_moviles = "SELECT * FROM tb_moviles WHERE estado = 1 ORDER BY entrada DESC";
$query_moviles = $pdo->prepare($sql_moviles);
$query_moviles->execute();
$moviles_datos = $query_moviles->fetchAll(PDO::FETCH_ASSOC);

?>