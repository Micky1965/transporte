<?php

include('../../config.php');

$nombre_chofer = $_GET['nombre_chofer'];
$dni_chofer = $_GET['dni_chofer'];
$estado = '0';

$sentencia = $pdo->prepare("UPDATE tb_choferes SET nombre_chofer=:nombre_chofer, dni_chofer=:dni_chofer, 
                            estado=:estado WHERE nombre_chofer=:nombre_chofer");

$sentencia->bindParam(':nombre_chofer',$nombre_chofer);
$sentencia->bindParam(':dni_chofer',$dni_chofer);
$sentencia->bindParam(':estado',$estado);

if($sentencia->execute()){
    session_start();
    $_SESSION['mensaje'] = "El Chofer queda Disponible";
    $_SESSION['icono'] = "success";
?>
<script>
    window.location.href='<?=$URL?>/choferes/estado_choferes.php';
</script>
<?php
}else{
echo 'error al registrar a la base de datos';
}