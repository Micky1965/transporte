<?php

include('../../config.php');

session_start();
if (isset($_SESSION['sesion_nick'])) {
session_destroy();
header('location: '.$URL.'/');
}

?>