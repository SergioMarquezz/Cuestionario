<?php


    require("../conexion/conexion.php");

   // $opcion = $_POST['opcion'];
    $cve_persona = $_POST['clave_aspi'];
    $cve_seccion = $_POST['seccion'];
    $opcion = $_POST['opcion'];

    try{

        if($opcion == "Generales"){

            $sql_respuestas = "SELECT saiiut.registro_inicial.nombre, soeconomico.preguntas.pregunta, soeconomico.reactivos.reactivo, soeconomico.respuestas.respuesta
            FROM soeconomico.detalle_preguntas
            INNER JOIN saiiut.registro_inicial ON soeconomico.detalle_preguntas.cve_persona = saiiut.registro_inicial.cve_aspirante
            INNER JOIN soeconomico.preguntas ON soeconomico.detalle_preguntas.cve_pregunta = soeconomico.preguntas.cve_pregunta 
            INNER JOIN soeconomico.reactivos ON soeconomico.detalle_preguntas.cve_reactivo = soeconomico.reactivos.cve_reactivo
            INNER JOIN soeconomico.respuestas ON soeconomico.detalle_preguntas.cve_respuesta = soeconomico.respuestas.cve_respuesta
            WHERE saiiut.registro_inicial.cve_aspirante = '$cve_persona' AND soeconomico.detalle_preguntas.cve_seccion = '$cve_seccion'";
    
            $result_respuestas = odbc_exec($connection,$sql_respuestas) or die (odbc_errormsg());
    
            
    
           if($result_respuestas){
    
            while($row = odbc_fetch_array($result_respuestas)){
    
             
                $array_datos["data"][] = array_map("utf8_encode", $row);     
                                    
            }
    
                $json_string = json_encode($array_datos);
              
                echo $json_string;      
        }
    }

    else if($opcion == "Familiar"){
        
        $sql_null= "SELECT saiiut.registro_inicial.nombre,soeconomico.preguntas.pregunta,soeconomico.respuestas.respuesta
        FROM soeconomico.detalle_preguntas
        INNER JOIN saiiut.registro_inicial ON soeconomico.detalle_preguntas.cve_persona = saiiut.registro_inicial.cve_aspirante
        INNER JOIN soeconomico.preguntas ON soeconomico.detalle_preguntas.cve_pregunta = soeconomico.preguntas.cve_pregunta 
        INNER JOIN soeconomico.respuestas ON soeconomico.detalle_preguntas.cve_respuesta = soeconomico.respuestas.cve_respuesta
        INNER JOIN soeconomico.secciones ON soeconomico.detalle_preguntas.cve_seccion = soeconomico.secciones.cve_seccion
        WHERE soeconomico.detalle_preguntas.cve_seccion = '$cve_seccion' AND soeconomico.detalle_preguntas.cve_persona = '$cve_persona' AND soeconomico.detalle_preguntas.cve_reactivo IS NULL";
    
        $result_null = odbc_exec($connection,$sql_null) or die (odbc_errormsg());
        
        
        if($result_null){
    
            while($rows = odbc_fetch_array($result_null)){
    
             
                $array_null["data"][] = array_map("utf8_encode", $rows);     
                                    
            }
    
                $json_null = json_encode($array_null);
              
                echo $json_null;      
               
        }
    }

    }catch(Exception $e){

        echo('Error en la consulta vista datos generales: ' . $e->GetMessage());
    }

?>