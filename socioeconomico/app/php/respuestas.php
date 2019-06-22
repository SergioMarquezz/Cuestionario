<?php

    require("../conexion/conexion.php");

    $sql = "SELECT cve_respuesta,cve_pregunta,respuesta FROM sitemas.respuestas;";

    $result_respuesta = odbc_exec($connection, $sql) or die (odbc_errormsg());

    $result_respuesta = odbc_exec($connection,$sql);

    $result_array_res = array(); 

    
    if($result_respuesta){

        while ($row = odbc_fetch_array($result_respuesta)){
            //se almacenan los resultados de la consulta en un arreglo
            $result_array_res[] = $row;
        }
        //print_r($result_array_res);
        
      // $json = json_encode($result_array, JSON_UNESCAPED_UNICODE);

    }
  
    else{

        die("Error " . odbc_errormsg($result));
    }
?>