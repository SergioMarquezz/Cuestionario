<?php

    session_start();

    require("../conexion/conexion.php");

    $nombre['nombre'] = $_SESSION['users'];

     print json_encode($nombre);

?>