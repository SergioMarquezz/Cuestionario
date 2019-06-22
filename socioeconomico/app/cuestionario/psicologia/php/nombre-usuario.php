<?php

    session_start();

    require_once("../../../conexion/conexion.php");

    $nombre = $_SESSION['nombre_user'];
    $paterno = $_SESSION['paterno'];
    $materno = $_SESSION['materno'];

    $datos = array("datos"=>array("name"=>$nombre, "pa"=>$paterno, "ma"=>$materno));

     print json_encode($datos);
     

?>