<?php

    require("../conexion/conexion.php");

    $cve_persona = $_POST['clave_aspi'];
    $cve_seccion = $_POST['seccion-familiar'];

    $cve_pregunta23 = $_POST['pregunta-23'];
    $cve_pregunta24 = $_POST['pregunta-24'];
    $cve_pregunta25 = $_POST['pregunta-25'];
    $cve_pregunta26 = $_POST['pregunta-26'];
    $cve_pregunta27 = $_POST['pregunta-27'];

    
    /*Respuestas de pregunta 23 */
    $cve_res_padre = $_POST['estudio-padre'];
    /*Respuestas de pregunta 24 */
    $cve_res_madre = $_POST['estudio-madre'];
    /*Respuestas de pregunta 25 */
    $cve_res_libros = $_POST['libros'];
    /*Respuestas de pregunta 26 */
    $cve_res_educativo = $_POST['educativo'];
    /*Respuestas de pregunta 27 */
    $cve_res_trabajar = $_POST['trabajar'];


    try{
        //Insertar pregunta 23
        $sql_insert_padre = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta) 
        VALUES('".$cve_persona."' , '".$cve_pregunta23."' , '".$cve_seccion."' , '".$cve_res_padre."')";

        $result_insert_padre = odbc_exec($connection,$sql_insert_padre) or die (odbc_errormsg());

        //Insertar pregunta 24
        $sql_insert_madre = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta) 
        VALUES('".$cve_persona."' , '".$cve_pregunta24."' , '".$cve_seccion."' , '".$cve_res_madre."')";

        $result_insert_madre = odbc_exec($connection,$sql_insert_madre) or die (odbc_errormsg());

        //Insertar pregunta 25
        $sql_insert_libros = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta) 
        VALUES('".$cve_persona."' , '".$cve_pregunta25."' , '".$cve_seccion."' , '".$cve_res_libros."')";

        $result_insert_libros = odbc_exec($connection,$sql_insert_libros) or die (odbc_errormsg());

        //Insertar pregunta 26
        $sql_insert_educativo = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta) 
        VALUES('".$cve_persona."' , '".$cve_pregunta26."' , '".$cve_seccion."' , '".$cve_res_educativo."')";

        $result_insert_educativo = odbc_exec($connection,$sql_insert_educativo) or die (odbc_errormsg());

        //Insertar pregunta 27
        $sql_insert_trabajar = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta) 
        VALUES('".$cve_persona."' , '".$cve_pregunta27."' , '".$cve_seccion."' , '".$cve_res_trabajar."')";

        $result_insert_trabajar = odbc_exec($connection,$sql_insert_trabajar) or die (odbc_errormsg());

        echo "Guardando";


    }catch(Exception $e){

        echo('Error al insertar familiar: ' . $e->GetMessage());
    }


?>