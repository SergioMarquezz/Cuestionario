<?php


    require("../../../conexion/conexion.php");

    $opcion = $_POST['opcion'];
    $cve_persona = $_POST['clave_aspi'];
    $cve_seccion = $_POST['seccion'];
   



    try{

        if($opcion == "Generales"){

            $sql_respuestas = "SELECT saiiut.saiiut.registro_inicial.nombre, sitemas.preguntas.pregunta, sitemas.reactivos.reactivo, sitemas.respuestas.respuesta
            FROM sitemas.detalle_preguntas
            INNER JOIN saiiut.saiiut.registro_inicial ON sitemas.detalle_preguntas.cve_persona = saiiut.saiiut.registro_inicial.cve_aspirante
            INNER JOIN sitemas.preguntas ON sitemas.detalle_preguntas.cve_pregunta = sitemas.preguntas.cve_pregunta 
            INNER JOIN sitemas.reactivos ON sitemas.detalle_preguntas.cve_reactivo = sitemas.reactivos.cve_reactivo
            INNER JOIN sitemas.respuestas ON sitemas.detalle_preguntas.cve_respuesta = sitemas.respuestas.cve_respuesta
            WHERE saiiut.saiiut.registro_inicial.cve_aspirante = '$cve_persona' AND sitemas.detalle_preguntas.cve_seccion = '$cve_seccion'";
    
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
        
        $sql_null= "SELECT saiiut.saiiut.registro_inicial.nombre,sitemas.preguntas.pregunta,sitemas.respuestas.respuesta
        FROM sitemas.detalle_preguntas
        INNER JOIN saiiut.saiiut.registro_inicial ON sitemas.detalle_preguntas.cve_persona = saiiut.saiiut.registro_inicial.cve_aspirante
        INNER JOIN sitemas.preguntas ON sitemas.detalle_preguntas.cve_pregunta = sitemas.preguntas.cve_pregunta 
        INNER JOIN sitemas.respuestas ON sitemas.detalle_preguntas.cve_respuesta = sitemas.respuestas.cve_respuesta
        INNER JOIN sitemas.secciones ON sitemas.detalle_preguntas.cve_seccion = sitemas.secciones.cve_seccion
        WHERE sitemas.detalle_preguntas.cve_seccion = '$cve_seccion' AND sitemas.detalle_preguntas.cve_persona = '$cve_persona' AND sitemas.detalle_preguntas.cve_reactivo IS NULL";
    
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