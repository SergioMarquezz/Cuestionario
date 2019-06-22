<?php
     require("../conexion/conexion.php");

    $seccion = $_POST['seccion'];
    

     try{

    
        $sql_alumnos = "SELECT DISTINCT saiiut.registro_inicial.nombre, saiiut.registro_inicial.apellido_pat, saiiut.registro_inicial.apellido_mat, saiiut.carreras_cgut.nombre AS nombre_carrera
                        FROM saiiut.registro_inicial
                        INNER JOIN soeconomico.detalle_preguntas ON saiiut.registro_inicial.cve_aspirante = soeconomico.detalle_preguntas.cve_persona
                        INNER JOIN saiiut.carreras_cgut ON saiiut.registro_inicial.carrera = saiiut.carreras_cgut.cve_carrera
                        WHERE soeconomico.detalle_preguntas.cve_seccion = '$seccion'";

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