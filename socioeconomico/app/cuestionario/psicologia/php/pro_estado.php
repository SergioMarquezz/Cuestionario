<?php

    
require("../../../conexion/conexion.php");

$cve_persona = $_POST['cve_aspi'];
$opcion = $_POST['opcion'];


    if($opcion == 'estado'){

        $sql = "SELECT TOP 1 saiiut.saiiut.estados.nombre, saiiut.saiiut.aspirantes.promedio_bachillerato, sitemas.detalle_preguntas.mes_anio_materia
        FROM saiiut.saiiut.aspirantes
        INNER JOIN saiiut.saiiut.estados ON saiiut.saiiut.aspirantes.cve_estado_nacimiento = saiiut.saiiut.estados.cve_estado
        INNER JOIN sitemas.detalle_preguntas ON saiiut.saiiut.aspirantes.cve_aspirante = sitemas.detalle_preguntas.cve_persona
        WHERE saiiut.saiiut.aspirantes.cve_aspirante = '$cve_persona' AND sitemas.detalle_preguntas.cve_pregunta = 4 ";
    
        $result_estados = odbc_exec($connection,$sql) or die(odbc_errormsg());
    
    
        if($result_estados){
            
            while($row = odbc_fetch_array($result_estados)){
    
            
                $array_estado["data"][] = array_map("utf8_encode", $row);     
                                    
            }
    
                $json_string = json_encode($array_estado);
            
                echo $json_string;    
     
        }
        
    }
    elseif($opcion == 'lenguas'){

        $sql_lenguas = "SELECT saiiut.saiiut.registro_inicial.nombre, apellido_pat, apellido_mat, reactivo, saiiut.saiiut.lenguas.nombre as lengua
        FROM sitemas.detalle_preguntas
        INNER JOIN sitemas.reactivos ON sitemas.detalle_preguntas.cve_reactivo = sitemas.reactivos.cve_reactivo
        INNER JOIN saiiut.saiiut.registro_inicial ON sitemas.detalle_preguntas.cve_persona = saiiut.saiiut.registro_inicial.cve_aspirante
        INNER JOIN saiiut.saiiut.lenguas ON sitemas.detalle_preguntas.cve_lengua = saiiut.saiiut.lenguas.cve_lengua";

        $result_lenguas = odbc_exec($connection,$sql_lenguas) or die(odbc_errormsg());

        if($result_lenguas){   

            while($row = odbc_fetch_array($result_lenguas)){
    
            
                $array_lenguas["data"][] = array_map("utf8_encode", $row);     
                                    
            }
    
            $json_string_lenguas = json_encode($array_lenguas);

            echo $json_string_lenguas;
            
     
        }
    }



?>