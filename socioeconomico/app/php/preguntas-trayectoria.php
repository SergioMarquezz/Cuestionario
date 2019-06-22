<?php

    require("../conexion/conexion.php");

    $opcion = $_POST['opcion'];
  

    $cve_persona = $_POST['clave_aspi'];
    $cve_seccion = $_POST['seccion-trayectoria'];

    $cve_pregunta3 = $_POST['pregunta-3'];
    $cve_pregunta4 = $_POST['pregunta-4'];
    $cve_pregunta5 = $_POST['pregunta-5'];
    $cve_pregunta6 = $_POST['pregunta-6'];
    $cve_pregunta7 = $_POST['pregunta-7'];
    $cve_pregunta8 = $_POST['pregunta-8'];
    $cve_pregunta9 = $_POST['pregunta-9'];
    $cve_pregunta10 = $_POST['pregunta-10'];


    $cve_res_entidad_estado = $_POST['estados'];
    $cve_res_meses = $_POST['meses'];
    $cve_res_concluir_bachiller = $_POST['medio-superior'];
    $cve_res_regimen = $_POST['regimen'];
    $cve_res_bachilleres = $_POST['ultimo-anio'];
    $cve_res_programa = $_POST['programa-estudia'];
    $cve_res_turno = $_POST['turno'];
    $promedio_final = $_POST['promedio-final'];
    $cve_res_beca = $_POST['beca'];

    try{

        if($opcion == 'superior'){

            
        $sql_insert_res4_concluir ="INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta)
        VALUES('".$cve_persona."','".$cve_pregunta4."','".$cve_seccion."','".$cve_res_concluir_bachiller."')";

        $result_insert_res4_concluir = odbc_exec($connection,$sql_insert_res4_concluir);

        echo "Guardado";

        }else if($opcion == 'meses'){
            $sql_insert_res4 ="INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,mes_anio_materia)
            VALUES('".$cve_persona."','".$cve_pregunta4."','".$cve_seccion."','".$cve_res_meses."')";
    
            $result_insert_res4 = odbc_exec($connection,$sql_insert_res4);
        
            echo "Guardado";

        }else{

            $sql_insert_res3 ="INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_estado)
                            VALUES('".$cve_persona."','".$cve_pregunta3."','".$cve_seccion."','".$cve_res_entidad_estado."')";

            $result_insert_res3 = odbc_exec($connection,$sql_insert_res3);


            $sql_insert_res5 ="INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta)
            VALUES('".$cve_persona."','".$cve_pregunta5."','".$cve_seccion."','".$cve_res_regimen."')";

            $result_insert_res5 = odbc_exec($connection,$sql_insert_res5);


            $sql_insert_res6 ="INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta)
            VALUES('".$cve_persona."','".$cve_pregunta6."','".$cve_seccion."','".$cve_res_bachilleres."')";

            $result_insert_res6 = odbc_exec($connection,$sql_insert_res6);


            $sql_insert_res7 ="INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta)
            VALUES('".$cve_persona."','".$cve_pregunta7."','".$cve_seccion."','".$cve_res_programa."')";

            $result_insert_res7 = odbc_exec($connection,$sql_insert_res7);


            $sql_insert_res8 ="INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta)
            VALUES('".$cve_persona."','".$cve_pregunta8."','".$cve_seccion."','".$cve_res_turno."')";

            $result_insert_res8 = odbc_exec($connection,$sql_insert_res8);


            $sql_insert_res9 ="INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,promedio)
            VALUES('".$cve_persona."','".$cve_pregunta9."','".$cve_seccion."','".$promedio_final."')";

            $result_insert_res9 = odbc_exec($connection,$sql_insert_res9);

            $sql_insert_res10 ="INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta)
            VALUES('".$cve_persona."','".$cve_pregunta10."','".$cve_seccion."','".$cve_res_beca."')";

            $result_insert_res10 = odbc_exec($connection,$sql_insert_res10);
        }
        
        

      


    }catch(Exception $e){

        echo('Error al insertar datos trayectoria: ' . $e->GetMessage());

    }










    


 


?>