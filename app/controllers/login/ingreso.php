<?php 

include('../../config.php');

$nick = $_POST ['nick'];
$password_user = $_POST ['password_user'];

$contador = 0;
$sql = "SELECT * FROM tb_usuarios WHERE nick_user = '$nick' AND password_user = '$password_user'";
$query = $pdo->prepare($sql);
$query->execute();
$usuarios = $query->fetchAll(PDO::FETCH_ASSOC);
foreach ($usuarios as $usuario) {
    $contador = $contador + 1;
    $nick_tabla = $usuario['nick_user'];
    $nombre_tabla = $usuario['nombre_user'];
}
if ($contador == 0) {
    
    session_start();
    $_SESSION['mensaje'] = "Datos Incorrectos";
    header('location: '.$URL.'/login');
}else {
    session_start();
    $_SESSION['sesion_nick'] = $nick;
    header('location: '.$URL.'/index.php');
}
?>