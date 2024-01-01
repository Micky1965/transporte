  <?php

  $sql_usuarios = "SELECT us.id_user as id_usuario, us.nick_user as nick, us.nombre_user as nombres, us.dni_user as dni, us.celular_user as celular, us.direccion_user as direccion, rol.rol as rol 
                  FROM tb_usuarios as us INNER JOIN tb_roles as rol ON us.id_rol = rol.id_rol ORDER BY nombres ASC";
  $query_usuarios = $pdo->prepare($sql_usuarios);
  $query_usuarios->execute();
  $usuarios_datos = $query_usuarios->fetchAll(PDO::FETCH_ASSOC);

  ?>