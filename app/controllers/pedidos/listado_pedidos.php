  <?php

  $sql_pedidos = "SELECT * FROM tb_pedidos";
  $query_pedidos = $pdo->prepare($sql_pedidos);
  $query_pedidos->execute();
  $pedidos_datos = $query_pedidos->fetchAll(PDO::FETCH_ASSOC);

  ?>