<?php

    require("../conexion/conexion.php");

    $cve_persona = $_POST['clave_aspi'];
    $cve_seccion_general = $_POST['datos'];
    $opcion = $_POST['opcion'];
  


    try{

        $sql = "SELECT TOP 1 * FROM sitemas.detalle_preguntas WHERE cve_seccion = '$cve_seccion_general' AND cve_persona = '$cve_persona'";

        $result_sql = odbc_exec($connection,$sql) or die (odbc_errormsg());

        $count_sql = odbc_num_rows($result_sql);

        if($count_sql == 1 && $opcion == 'Generales'){

            echo "Verificado generales";
        }

        else if($count_sql == 1 && $opcion == 'Trayectoria'){

            echo "Verificado trayectoria";
        }

        else if($count_sql == 1 && $opcion == 'Familiar'){

            echo "Verificado familiar";
        }

        else if($count_sql == 1 && $opcion == 'Academicas'){

            echo "Verificado academicas";
        }
        

        $sql_caracte = "SELECT TOP 1 * FROM sitemas.detalle_preguntas WHERE cve_seccion = 3 AND cve_persona = '$cve_persona' AND cve_pregunta = 22;";
        $result_sql_caracte = odbc_exec($connection,$sql_caracte) or die (odbc_errormsg());

        $count_sql_caracte = odbc_num_rows($result_sql_caracte);

        if($count_sql_caracte == 1 && $opcion == 'Caracteristicas'){

            echo "Verificado caracteristicas";
        }


      
    }catch(Exception $e){

        die('Error en la consulta verificar: ' . $e->GetMessage());
    }

?>