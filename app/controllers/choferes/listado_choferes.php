  <?php

  $sql_choferes = "SELECT cho.id_chofer as id_chofer, cho.nombre_chofer as nombre, cho.dni_chofer as dni, 
                  cho.celular_chofer as celular, cho.direccion_chofer as direccion, cho.obs as obs, cho.movil_chofer as movil, rol2.rol2 as rol2  
                  FROM tb_choferes as cho INNER JOIN tb_roles2 as rol2 ON cho.id_rol2 = rol2.id_rol2 ORDER BY nombre ASC";
  $query_choferes = $pdo->prepare($sql_choferes);
  $query_choferes->execute();
  $choferes_datos = $query_choferes->fetchAll(PDO::FETCH_ASSOC);

  ?>