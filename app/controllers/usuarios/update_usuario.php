<?php

$id_usuario_get = $_GET['id'];

$sql_usuarios = "SELECT us.id_user as id_user, us.nick_user as nick_user, us.nombre_user as nombre_user, us.dni_user as dni_user, us.celular_user as celular_user, us.direccion_user as direccion_user, us.password_user as password_user, rol.rol as rol 
                  FROM tb_usuarios as us INNER JOIN tb_roles as rol ON us.id_rol = rol.id_rol 
                  WHERE id_user = '$id_usuario_get' ";
$query_usuarios = $pdo->prepare($sql_usuarios);
$query_usuarios->execute();
$usuarios_datos = $query_usuarios->fetchAll(PDO::FETCH_ASSOC);

foreach ($usuarios_datos as $usuarios_dato){
    $nick_user = $usuarios_dato['nick_user'];
    $nombre_user = $usuarios_dato['nombre_user'];
    $dni_user = $usuarios_dato['dni_user'];
    $celular_user = $usuarios_dato['celular_user'];
    $direccion_user = $usuarios_dato['direccion_user'];
    $password_user = $usuarios_dato['password_user'];
    $rol = $usuarios_dato['rol'];
    
}
