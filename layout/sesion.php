<?php

session_start();
if (isset($_SESSION['sesion_nick'])) {
  $nick_sesion = $_SESSION['sesion_nick'];
  $sql = "SELECT * FROM tb_usuarios WHERE nick_user = '$nick_sesion' ";
  $query = $pdo->prepare($sql);
  $query->execute();
  $usuarios = $query->fetchAll(PDO::FETCH_ASSOC);
  foreach ($usuarios as $usuario) {
    $nick_sesion = $usuario['nick_user'];
    $id_sesion = $usuario['id_user'];
    $rol_sesion = $usuario['id_rol'];
  }
} else {
  echo "No existe sesión";
  header('location: ' . $URL . '/login');
}

?>