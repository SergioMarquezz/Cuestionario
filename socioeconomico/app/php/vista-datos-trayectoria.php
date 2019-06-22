<?php

    require("../conexion/conexion.php");

    $opcion = $_POST['opcion'];

    $cve_persona = $_POST['clave_aspi'];
    $cve_seccion = $_POST['seccion-trayectoria'];
    $cve_pregunta9 = $_POST['pregunta-9'];
    $cve_pregunta4 = $_POST['pregunta-4'];

    try{

        if($opcion == 'trayectoria'){
            
            $sql_consulta_trayectoria = "SELECT saiiut.personas.nombre, soeconomico.secciones.seccion, soeconomico.preguntas.pregunta,soeconomico.respuestas.respuesta
            FROM soeconomico.detalle_preguntas
            INNER JOIN saiiut.personas ON soeconomico.detalle_preguntas.cve_persona = saiiut.personas.cve_persona
            INNER JOIN soeconomico.preguntas ON soeconomico.detalle_preguntas.cve_pregunta = soeconomico.preguntas.cve_pregunta 
            INNER JOIN soeconomico.respuestas ON soeconomico.detalle_preguntas.cve_respuesta = soeconomico.respuestas.cve_respuesta
            INNER JOIN soeconomico.secciones ON soeconomico.detalle_preguntas.cve_seccion = soeconomico.secciones.cve_seccion
            WHERE soeconomico.detalle_preguntas.cve_seccion = '$cve_seccion' AND soeconomico.detalle_preguntas.cve_persona = '$cve_persona'";
    
            $result_trayectoria = odbc_exec($connection,$sql_consulta_trayectoria) or die(odbc_errormsg());
    
    
            if($result_trayectoria){
    
                while($row = odbc_fetch_array($result_trayectoria)){
    
                    $name_encode = $row["nombre"];
                    $seccion_encode = $row["seccion"];
                    $pregunta_encode = $row["pregunta"];
                    $respuesta_enconde = $row["respuesta"];
    
                    $name = utf8_encode($name_encode);
                    $seccion = utf8_encode($seccion_encode);
                    $pregunta = utf8_encode($pregunta_encode);
                    $respuesta = utf8_encode($respuesta_enconde);
    
    
                    $array_trayectoria[] = array("nombre"=>"$name","seccion"=>"$seccion","pregunta"=>"$pregunta","respuesta"=>"$respuesta");
    
                }
                $json_string_trayectoria = json_encode($array_trayectoria);
              
                echo $json_string_trayectoria;
    
                
            }

        }

        else if($opcion == 'meses-consulta'){

               $sql_consulta_meses = "SELECT mes_anio_materia FROM soeconomico.detalle_preguntas WHERE cve_pregunta = '$cve_pregunta4'";
                $result_meses = odbc_exec($connection,$sql_consulta_meses) or die(odbc_errormsg());

            
                if($result_meses){

                    while($row_meses = odbc_fetch_array($result_meses)){

                        $mes_encode = $row_meses['mes_anio_materia'];

                        $meses = utf8_encode($mes_encode);

                        $array_mes[] = array("meses"=>"$meses");
                    }

                    $json_string_meses = json_encode($array_mes);
                
                    echo $json_string_meses;
                }
    
        }


    }catch(Exception $e){

        echo('Error en la consulta vista datos trayectoria ' . $e->GetMessage());
    }
?>