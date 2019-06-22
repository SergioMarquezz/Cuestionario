<?php

    require("../conexion/conexion.php");
    
    $sql = "SELECT cve_pregunta, cve_reactivo, reactivo FROM sitemas.reactivos;";
    $sql_estados = "SELECT cve_estado, nombre FROM saiiut.saiiut.estados;";
    $sql_lenguas = "SELECT TOP 23 * FROM saiiut.saiiut.lenguas";
    $sql_lenguas2 = "SELECT TOP 23 * FROM saiiut.saiiut.lenguas";


    $result = odbc_exec($connection, $sql) or die (odbc_errormsg());

    $result_estado = odbc_exec($connection,$sql_estados);
    $result_lenguas = odbc_exec($connection,$sql_lenguas);
    $result_lenguas2 = odbc_exec($connection,$sql_lenguas2);

    $result_array_re = array();   
   

    if($result){

        while ($row = odbc_fetch_array($result)){
            //se almacenan los resultados de la consulta en un arreglo
            $result_array_re[] = $row;
        }
        

    }
  
    else{

        die("Error " . odbc_errormsg($result));
    }

   
?>