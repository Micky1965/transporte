<?php

$sql_choferes = "SELECT * FROM tb_choferes WHERE estado = 0";
$query_choferes = $pdo->prepare($sql_choferes);
$query_choferes->execute();
$choferes_datos = $query_choferes->fetchAll(PDO::FETCH_ASSOC);

?>