<?php
     require("../../../conexion/conexion.php");

    $seccion = $_POST['seccion'];
    

     try{

    
        $sql_alumnos = "SELECT DISTINCT saiiut.saiiut.registro_inicial.cve_aspirante, saiiut.saiiut.registro_inicial.nombre, apellido_pat, apellido_mat, saiiut.saiiut.carreras_cgut.nombre AS nombre_carrera
        FROM saiiut.saiiut.registro_inicial
        INNER JOIN sitemas.detalle_preguntas ON saiiut.saiiut.registro_inicial.cve_aspirante = sitemas.detalle_preguntas.cve_persona
        INNER JOIN saiiut.saiiut.carreras_cgut ON saiiut.saiiut.registro_inicial.carrera = saiiut.saiiut.carreras_cgut.cve_carrera
        WHERE sitemas.detalle_preguntas.cve_seccion = '$seccion'";

        $result_alumnos = odbc_exec($connection,$sql_alumnos) or die (odbc_errormsg());

    

       if($result_alumnos){

        while($row = odbc_fetch_array($result_alumnos)){

             $array_alumnos["data"][] = array_map("utf8_encode", $row);                      
        }
         
            $json_alumnos = json_encode($array_alumnos);
        

            echo $json_alumnos;
             
    }
   
    }catch(Exception $e){

        echo('Error en la consulta vista datos generales: ' . $e->GetMessage());
    }

?>