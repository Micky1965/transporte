<?php

define('SERVIDOR','localhost');
define('USUARIO','root');
define('PASSWORD','');
define('BD','transporte');

$servidor = "mysql:dbname=".BD.";host=".SERVIDOR;

try {
    $pdo = new PDO($servidor, USUARIO, PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
} catch (PDOException $e) {

    //echo "Error al conectar a la base de datos";
    echo "<script>alert('Error al conectar a la base de datos')</script>";
}

$URL = "http://192.168.100.84/transporte";
//$URL = "http://localhost/transporte";

date_default_timezone_set("America/Argentina/Salta");
$fechaHora = date('Y/m/d H:i:s');
$hora = date('H:i:s');
$fecha = date('Y/m/d');

if (isset($_SESSION['mensaje'])) {
    $respuesta = $_SESSION['mensaje']; ?>
    <script>
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: '<?php echo $respuesta;?>',
                showConfirmButton: false,
                timer: 3000
            })
        </script>
<?php 
    unset($_SESSION['mensaje']);
    
}

?>

