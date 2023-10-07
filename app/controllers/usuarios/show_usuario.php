<?php

$id_usuario_get = $_GET['id'];

$sql_usuarios = "SELECT us.id_user as id_usuario, us.nick_user as nick, us.nombre_user as nombres, us.dni_user as dni, us.celular_user as celular, us.direccion_user as direccion, rol.rol as rol 
                FROM tb_usuarios as us INNER JOIN tb_roles as rol ON us.id_rol = rol.id_rol where id_user = '$id_usuario_get' ";
$query_usuarios = $pdo->prepare($sql_usuarios);
$query_usuarios->execute();
$usuarios_datos = $query_usuarios->fetchAll(PDO::FETCH_ASSOC);

foreach ($usuarios_datos as $usuarios_dato){
    $nick_user = $usuarios_dato['nick'];
    $nombre_user = $usuarios_dato['nombres'];
    $dni_user = $usuarios_dato['dni'];
    $celular_user = $usuarios_dato['celular'];
    $direccion_user = $usuarios_dato['direccion'];
    $rol = $usuarios_dato['rol'];
}
