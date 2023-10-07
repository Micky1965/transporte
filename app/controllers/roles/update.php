<?php

include('../../config.php');

$id_rol = $_POST['id_rol'];
$rol = $_POST['rol'];

$sentencia = $pdo->prepare("UPDATE tb_roles SET rol=:rol
                     WHERE id_rol = :id_rol ");

$sentencia->bindParam('rol', $rol);
$sentencia->bindParam('id_rol', $id_rol);

if ($sentencia->execute()) {
    session_start();
    $_SESSION['mensaje'] = "Se actualizo el rol de la manera correcta";
    $_SESSION['icono'] = "success";
    header('Location: ' . $URL . '/roles/');
} else {
    session_start();
    $_SESSION['mensaje'] = "Error no se pudo actualizar en la base de datos";
    $_SESSION['icono'] = "error";
    header('Location: ' . $URL . '/roles/update.php?id=' .$id_rol);
}
