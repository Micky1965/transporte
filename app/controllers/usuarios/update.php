<?php

include('../../config.php');

$nick_user = $_POST['nick_user'];
$nombre_user = $_POST['nombre_user'];
$dni_user = $_POST['dni_user'];
$celular_user = $_POST['celular_user'];
$direccion_user = $_POST['direccion_user'];
$password_user = $_POST['password_user'];
$rol = $_POST['rol'];
$id_user = $_POST['id_user'];

if ($password_user == "") {

    $sentencia = $pdo->prepare("UPDATE tb_usuarios SET nick_user=:nick_user, nombre_user=:nombre_user, dni_user=:dni_user, 
                            celular_user=:celular_user, direccion_user=:direccion_user, id_rol=:id_rol WHERE id_user = :id_user ");

    $sentencia->bindParam('nick_user', $nick_user);
    $sentencia->bindParam('nombre_user', $nombre_user);
    $sentencia->bindParam('dni_user', $dni_user);
    $sentencia->bindParam('celular_user', $celular_user);
    $sentencia->bindParam('direccion_user', $direccion_user);
    $sentencia->bindParam('id_rol', $rol);
    $sentencia->bindParam('id_user', $id_user);
    $sentencia->execute();
    session_start();
    $_SESSION['mensaje'] = "Usuario Actualizado";
    $_SESSION['icono'] = "success";
    header('Location: ' . $URL . '/usuarios/');
} else {
    $sentencia = $pdo->prepare("UPDATE tb_usuarios SET nick_user=:nick_user, nombre_user=:nombre_user, 
                        dni_user=:dni_user, celular_user=:celular_user, direccion_user=:direccion_user, id_rol=:id_rol, 
                        password_user=:password_user WHERE id_user = :id_user ");

    $sentencia->bindParam('nick_user', $nick_user);
    $sentencia->bindParam('nombre_user', $nombre_user);
    $sentencia->bindParam('dni_user', $dni_user);
    $sentencia->bindParam('celular_user', $celular_user);
    $sentencia->bindParam('direccion_user', $direccion_user);
    $sentencia->bindParam('id_rol', $rol);
    $sentencia->bindParam('password_user', $password_user);
    $sentencia->bindParam('id_user', $id_user);
    $sentencia->execute();
    session_start();
    $_SESSION['mensaje'] = "Datos del Usuario Actualizados";
    $_SESSION['icono'] = "success";
    header('Location: ' . $URL . '/usuarios/');
}
