<?php

$sql_choferes = "SELECT * FROM tb_choferes ORDER BY estado ASC";
$query_choferes = $pdo->prepare($sql_choferes);
$query_choferes->execute();
$choferes_datos = $query_choferes->fetchAll(PDO::FETCH_ASSOC);

?>
