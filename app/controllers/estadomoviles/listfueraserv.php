<?php

$sql_estadomovil = "SELECT * FROM tb_estadomovil WHERE estado = 0 ORDER BY estado ASC";
$query_estadomovil = $pdo->prepare($sql_estadomovil);
$query_estadomovil->execute();
$estadomovil_datos = $query_estadomovil->fetchAll(PDO::FETCH_ASSOC);

?>