<?php

    require("../conexion/conexion.php");

    $cve_persona = $_POST['clave_aspi'];
    $cve_seccion = $_POST['seccion-caracteristicas'];

    $cve_pregunta11 = $_POST['pregunta-11'];
    $cve_pregunta12 = $_POST['pregunta-12'];
    $cve_pregunta13 = $_POST['pregunta-13'];


    /*Reactivos pregunta 11*/ 
    $cve_reactivo_participo = $_POST['rea-participo'];
    $cve_reactivo_intervengo = $_POST ['rea-intervengo'];
    $cve_reactivo_cumplo = $_POST['rea-cumplo'];
    $cve_reactivo_colaboro = $_POST['rea-colaboro'];
    $cve_reactivo_sugerencias = $_POST ['rea-sugerencias'];

    /*Reactivos pregunta 12*/ 
    $cve_reactivo_presentar = $_POST['rea-presentar'];
    $cve_reactivo_participar = $_POST['rea-participar'];
    $cve_reactivo_conversar = $_POST['rea-conversar'];
    $cve_reactivo_dudas = $_POST['rea-dudas'];

    /*Reactivos pregunta 13*/
    $cve_reactivo_falto = $_POST['rea-falto'];
    $cve_reactivo_materiales = $_POST['rea-materiales'];
    $cve_reactivo_tiempo_estudiar = $_POST['rea-tiempo-estudiar'];
    $cve_reactivo_ejercicios = $_POST['rea-ejercicios'];
    $cve_reactivo_extracurricular = $_POST['rea-extracurricular'];
    $cve_reactivo_clase = $_POST['rea-clase'];
    $cve_reactivo_participar_clase = $_POST['rea-participar-clases'];
    $cve_reactivo_tareas = $_POST['rea-tareas'];
    $cve_reactivo_atencion = $_POST['rea-atencion'];


    /*Respuestas  de pregunta 11 */
    $cve_res_participo = $_POST['participo'];
    $cve_res_intervengo = $_POST['intervengo'];
    $cve_res_cumplo = $_POST['cumplo'];
    $cve_res_colaboro = $_POST['colaboro'];
    $cve_res_sugerencias = $_POST['sugerencias'];

    /*Respuestas de pregunta 12 */
    $cve_res_presentar = $_POST['presentar'];
    $cve_res_participar = $_POST['participar'];
    $cve_res_conversar = $_POST['conversar'];
    $cve_res_dudas = $_POST['dudas'];

    /*Respuestas de pregunta 13 */
    $cve_res_falto = $_POST['falto'];
    $cve_res_materiales = $_POST['materiales'];
    $cve_res_tiempo_estudiar = $_POST['estudiar'];
    $cve_res_ejercicios = $_POST['ejercicios'];
    $cve_res_extracurricular = $_POST['extracurricular'];
    $cve_res_clase = $_POST['clase'];
    $cve_res_participar_clase = $_POST['participar-clases'];
    $cve_res_tareas = $_POST['tareas'];
    $cve_res_atencion = $_POST['atencion'];



    try{

        //Insertar respuestas de la pregunta 11
        $sql_insert_parti = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
        VALUES('".$cve_persona."' , '".$cve_pregunta11."' , '".$cve_seccion."' , '".$cve_res_participo."', '".$cve_reactivo_participo."')";

        $result_insert_parti = odbc_exec($connection,$sql_insert_parti) or die (odbc_errormsg());

        $sql_insert_colaboro = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
        VALUES('".$cve_persona."' , '".$cve_pregunta11."' , '".$cve_seccion."' , '".$cve_res_colaboro."', '".$cve_reactivo_colaboro."')";

        $result_insert_colaboro = odbc_exec($connection,$sql_insert_colaboro) or die (odbc_errormsg());

        $sql_insert_intervengo = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
        VALUES('".$cve_persona."' , '".$cve_pregunta11."' , '".$cve_seccion."' , '".$cve_res_intervengo."', '".$cve_reactivo_intervengo."')";

        $result_insert_intervengo = odbc_exec($connection,$sql_insert_intervengo) or die (odbc_errormsg());

        $sql_insert_sugerecias = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
        VALUES('".$cve_persona."' , '".$cve_pregunta11."' , '".$cve_seccion."' , '".$cve_res_sugerencias."', '".$cve_reactivo_sugerencias."')";

        $result_insert_sugerecias = odbc_exec($connection,$sql_insert_sugerecias) or die (odbc_errormsg());

        $sql_insert_cumplo = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
        VALUES('".$cve_persona."' , '".$cve_pregunta11."' , '".$cve_seccion."' , '".$cve_res_cumplo."', '".$cve_reactivo_cumplo."')";

        $result_insert_cumplo = odbc_exec($connection,$sql_insert_cumplo) or die (odbc_errormsg());


        //Insertar respuestas de la pregunta 12
        $sql_insert_presentar = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
        VALUES('".$cve_persona."' , '".$cve_pregunta12."' , '".$cve_seccion."' , '".$cve_res_presentar."', '".$cve_reactivo_presentar."')";

        $result_insert_presentar = odbc_exec($connection,$sql_insert_presentar) or die (odbc_errormsg());

        $sql_insert_conversar = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
        VALUES('".$cve_persona."' , '".$cve_pregunta12."' , '".$cve_seccion."' , '".$cve_res_conversar."', '".$cve_reactivo_conversar."')";

        $result_insert_conversar = odbc_exec($connection,$sql_insert_conversar) or die (odbc_errormsg());

        $sql_insert_participar = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
        VALUES('".$cve_persona."' , '".$cve_pregunta12."' , '".$cve_seccion."' , '".$cve_res_participar."', '".$cve_reactivo_participar."')";

        $result_insert_participar = odbc_exec($connection,$sql_insert_participar) or die (odbc_errormsg());
        
        $sql_insert_dudas = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
        VALUES('".$cve_persona."' , '".$cve_pregunta12."' , '".$cve_seccion."' , '".$cve_res_dudas."', '".$cve_reactivo_dudas."')";

        $result_insert_dudas = odbc_exec($connection,$sql_insert_dudas) or die (odbc_errormsg());


        //Insertar respuestas de la pregunta 13
        $sql_insert_falto = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
        VALUES('".$cve_persona."' , '".$cve_pregunta13."' , '".$cve_seccion."' , '".$cve_res_falto."', '".$cve_reactivo_falto."')";

        $result_insert_falto = odbc_exec($connection,$sql_insert_falto) or die (odbc_errormsg());

        $sql_insert_material = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
        VALUES('".$cve_persona."' , '".$cve_pregunta13."' , '".$cve_seccion."' , '".$cve_res_materiales."', '".$cve_reactivo_materiales."')";

        $result_insert_material = odbc_exec($connection,$sql_insert_material) or die (odbc_errormsg());

        $sql_insert_tiempo = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
        VALUES('".$cve_persona."' , '".$cve_pregunta13."' , '".$cve_seccion."' , '".$cve_res_tiempo_estudiar."', '".$cve_reactivo_tiempo_estudiar."')";

        $result_insert_tiempo = odbc_exec($connection,$sql_insert_tiempo) or die (odbc_errormsg());

        $sql_insert_ejercicios = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
        VALUES('".$cve_persona."' , '".$cve_pregunta13."' , '".$cve_seccion."' , '".$cve_res_ejercicios."', '".$cve_reactivo_ejercicios."')";

        $result_insert_ejercicios = odbc_exec($connection,$sql_insert_ejercicios) or die (odbc_errormsg());

        $sql_insert_extracu = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
        VALUES('".$cve_persona."' , '".$cve_pregunta13."' , '".$cve_seccion."' , '".$cve_res_extracurricular."', '".$cve_reactivo_extracurricular."')";

        $result_insert_extracu = odbc_exec($connection,$sql_insert_extracu) or die (odbc_errormsg());

        $sql_insert_clase = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
        VALUES('".$cve_persona."' , '".$cve_pregunta13."' , '".$cve_seccion."' , '".$cve_res_clase."', '".$cve_reactivo_clase."')";

        $result_insert_clase = odbc_exec($connection,$sql_insert_clase) or die (odbc_errormsg());

        $sql_insert_par = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
        VALUES('".$cve_persona."' , '".$cve_pregunta13."' , '".$cve_seccion."' , '".$cve_res_participar_clase."', '".$cve_reactivo_participar_clase."')";

        $result_insert_par = odbc_exec($connection,$sql_insert_par) or die (odbc_errormsg());

        $sql_insert_tareas = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
        VALUES('".$cve_persona."' , '".$cve_pregunta13."' , '".$cve_seccion."' , '".$cve_res_tareas."', '".$cve_reactivo_tareas."')";

        $result_insert_tareas = odbc_exec($connection,$sql_insert_tareas) or die (odbc_errormsg());

        $sql_insert_atencion = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
        VALUES('".$cve_persona."' , '".$cve_pregunta13."' , '".$cve_seccion."' , '".$cve_res_atencion."', '".$cve_reactivo_atencion."')";

        $result_insert_atencion = odbc_exec($connection,$sql_insert_atencion) or die (odbc_errormsg());

       echo "Guardado";
        

    }catch(Exception $e){

        echo('Error al insertar caracteristicas: ' . $e->GetMessage());
    }
    


?>