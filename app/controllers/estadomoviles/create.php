<?php

include('../../config.php');


session_start();
    $_SESSION['mensaje'] = "Móvil Registrado con Éxito";
    $_SESSION['icono'] = "success";
    header('Location: ' . $URL . '/moviles/');