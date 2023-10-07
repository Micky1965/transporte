<?php

$sql_estadomovil = "SELECT * from tb_estadomovil ORDER BY estado DESC";
$query_estadomovil = $pdo->prepare($sql_estadomovil);
$query_estadomovil->execute();
$estadomovil_datos = $query_estadomovil->fetchAll(PDO::FETCH_ASSOC);

?>
