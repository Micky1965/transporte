<?php

include('../../config.php');

$nick_user = $_POST['nick_user'];
$nombre_user = $_POST['nombre_user'];
$dni_user = $_POST['dni_user'];
$celular_user = $_POST['celular_user'];
$direccion_user = $_POST['direccion_user'];
$rol = $_POST['rol'];
$password_user = $_POST['password_user'];

$sql = "SELECT * FROM tb_usuarios WHERE nick_user = '$nick_user' or dni_user = '$dni_user'";
$query = $pdo->prepare($sql);
$query->execute();
$usuarios = $query->fetchAll(PDO::FETCH_ASSOC);

foreach ($usuarios as $usuario) {
    $nick_user_table = $usuario['nick_user'];
    $dni_user_table = $usuario['dni_user'];
}
if (  (($nick_user_table) == ($nick_user) or ($dni_user_table) == ($dni_user))  ) {
    session_start();
    $_SESSION['mensaje'] = "Este Usuario Ya Existe En La Base De Datos";
    $_SESSION['icono'] = "error";
    header('Location: ' . $URL . '/usuarios/');
} else {

       $sentencia = $pdo->prepare("INSERT INTO tb_usuarios
       ( nick_user, nombre_user, dni_user, celular_user, direccion_user, id_rol, password_user) 
VALUES (:nick_user,:nombre_user,:dni_user,:celular_user,:direccion_user,:id_rol,:password_user)");

       $sentencia->bindParam('nick_user', $nick_user);
       $sentencia->bindParam('nombre_user', $nombre_user);
       $sentencia->bindParam('dni_user', $dni_user);
       $sentencia->bindParam('celular_user', $celular_user);
       $sentencia->bindParam('direccion_user', $direccion_user);
       $sentencia->bindParam('id_rol', $rol);
       $sentencia->bindParam('password_user', $password_user);
       $sentencia->execute();
       session_start();
       $_SESSION['mensaje'] = "Usuario Registrado con Éxito";
       $_SESSION['icono'] = "success";
       header('Location: ' . $URL . '/usuarios/');
}
