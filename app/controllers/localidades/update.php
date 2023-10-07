<?php

include('../../config.php');

$nombre_localidad = $_POST['nombre_localidad'];
$distancia_localidad = $_POST['distancia_localidad'];
$precio_t1 = $_POST['precio_t1'];
$precio_t2 = $_POST['precio_t2'];
$id_localidad = $_POST['id_localidad'];


$sentencia = $pdo->prepare("UPDATE tb_localidades SET nombre_localidad=:nombre_localidad, 
                    distancia_localidad=:distancia_localidad, precio_t1=:precio_t1, precio_t2=:precio_t2
                    WHERE id_localidad = :id_localidad ");

$sentencia->bindParam('nombre_localidad', $nombre_localidad);
$sentencia->bindParam('distancia_localidad', $distancia_localidad);
$sentencia->bindParam('precio_t1', $precio_t1);
$sentencia->bindParam('precio_t2', $precio_t2);
$sentencia->bindParam('id_localidad', $id_localidad);
$sentencia->execute();
    session_start();
    $_SESSION['mensaje'] = "Localidad Actualizada de manera Correcta";
    $_SESSION['icono'] = "success";
    header('Location: ' . $URL . '/localidades/');

    