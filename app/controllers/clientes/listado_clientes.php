  <?php

  $sql_clientes = "SELECT cli.id_cliente as id_cliente, cli.nombre_cliente as nombre, cli.celular_cliente as celular, 
                  cli.direccion_cliente as direccion, cli.referencia_cliente as referencia, cli.obs_cliente as obs 
                  FROM tb_clientes as cli ORDER BY nombre ASC";
  $query_clientes = $pdo->prepare($sql_clientes);
  $query_clientes->execute();
  $clientes_datos = $query_clientes->fetchAll(PDO::FETCH_ASSOC);

  ?>