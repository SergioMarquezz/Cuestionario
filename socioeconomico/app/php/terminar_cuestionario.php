<?php

    require("../conexion/conexion.php");

    $consecutivo_aspirante = $_POST['terminar'];

    $sql_update = "UPDATE saiiut.saiiut.check_inicial SET socioeconomico = 1 WHERE consecutivo_aspirante = $consecutivo_aspirante";
    $result_update = odbc_exec($connection,$sql_update) or die (odbc_errormsg());

    if (!$result_update ) {
        echo('Error en la consulta SQL personas');
    }
    else{
       
        echo "actualizado";
        
    }
?>