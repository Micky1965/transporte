<?php

$sql_moviles = "SELECT * from tb_moviles ORDER BY estado DESC";
$query_moviles = $pdo->prepare($sql_moviles);
$query_moviles->execute();
$moviles_datos = $query_moviles->fetchAll(PDO::FETCH_ASSOC);

?>
