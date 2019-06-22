<?php

    
require("../conexion/conexion.php");

$cve_persona = $_POST['cve_aspi'];


    $sql = "SELECT TOP 1 saiiut.estados.nombre, saiiut.aspirantes.promedio_bachillerato, soeconomico.detalle_preguntas.mes_anio_materia
    FROM saiiut.aspirantes
    INNER JOIN saiiut.estados ON saiiut.aspirantes.cve_estado_nacimiento = saiiut.estados.cve_estado
    INNER JOIN soeconomico.detalle_preguntas ON saiiut.aspirantes.cve_aspirante = soeconomico.detalle_preguntas.cve_persona
    WHERE saiiut.aspirantes.cve_aspirante = '$cve_persona' AND soeconomico.detalle_preguntas.cve_pregunta = 4 ";

    $result_estados = odbc_exec($connection,$sql) or die(odbc_errormsg());


    if($result_estados){
        
        while($row = odbc_fetch_array($result_estados)){

        
            $array_estado["data"][] = array_map("utf8_encode", $row);     
                                
        }

            $json_string = json_encode($array_estado);
        
            echo $json_string;    
 
    }



?>