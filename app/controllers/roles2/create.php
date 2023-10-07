<?php

include ('../../config.php');

$rol2 = $_POST['rol2'];

    $sentencia = $pdo->prepare("INSERT INTO tb_roles2
       ( rol2) 
VALUES (:rol2)");

    $sentencia->bindParam('rol2',$rol2);
    
    if($sentencia->execute()){
        session_start();
        $_SESSION['mensaje'] = "Se registro el rol de la manera correcta";
        $_SESSION['icono'] = "success";
        header('Location: '.$URL.'/roles2/');
    }
