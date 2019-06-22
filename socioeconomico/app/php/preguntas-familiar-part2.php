<?php

    require("../conexion/conexion.php");

    $cve_persona = $_POST['clave_aspi'];
    $cve_seccion = $_POST['seccion-familiar'];

    $cve_pregunta28 = $_POST['pregunta-28'];
    $cve_pregunta29 = $_POST['pregunta-29'];
    $cve_pregunta30 = $_POST['pregunta-30'];
    $cve_pregunta31 = $_POST['pregunta-31'];
    $cve_pregunta32 = $_POST['pregunta-32'];


    //Reactivos de pregunta 29
    $cve_reac_telefono = $_POST['rea-telefonia'];
    $cve_reac_lavadora = $_POST['rea-lavadora'];
    $cve_reac_refri = $_POST['rea-refri'];
    $cve_reac_horno = $_POST['rea-horno'];
    $cve_reac_internet = $_POST['rea-internet'];
    $cve_reac_television = $_POST['rea-television'];
    $cve_reac_tablet = $_POST['rea-tablet'];

    //Reactivos de pregunta 31
    $cve_reac_computadora = $_POST['rea-computadora'];
    $cve_reac_tele = $_POST['rea-tele'];
    $cve_reac_auto = $_POST['rea-auto'];
    $cve_reac_banos = $_POST['rea-banos'];



    /*Respuestas de pregunta 28 */
    $cve_res_personas = $_POST['personas'];

    /*Respuestas de pregunta 29 */
    $cve_res_telefonia = $_POST['telefonia'];
    $cve_res_lavadora = $_POST['lavadora'];
    $cve_res_refri = $_POST['refri'];
    $cve_res_horno = $_POST['horno'];
    $cve_res_internet = $_POST['internet'];
    $cve_res_television = $_POST['television'];
    $cve_res_tablet = $_POST['tablet'];

    /*Respuestas de pregunta 30 */
    $cve_res_cuartos = $_POST['cuartos'];

    /*Respuestas de pregunta 31 */
    $cve_res_computadora = $_POST['computadora'];
    $cve_res_tele = $_POST['tele'];
    $cve_res_auto = $_POST['auto'];
    $cve_res_banos = $_POST['banos'];

    /*Respuestas de pregunta 32 */
    $cve_res_vacaciones = $_POST['vacaciones'];


    try{
        //Insertar pregunta 28
        $sql_insert_personas = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta) 
        VALUES('".$cve_persona."' , '".$cve_pregunta28."' , '".$cve_seccion."' , '".$cve_res_personas."')";

        $result_insert_personas = odbc_exec($connection,$sql_insert_personas) or die (odbc_errormsg());

        //Insertar pregunta 29
        $sql_insert_telefono= "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
        VALUES('".$cve_persona."' , '".$cve_pregunta29."' , '".$cve_seccion."' , '".$cve_res_telefonia."', '".$cve_reac_telefono."')";

        $result_insert_telefono = odbc_exec($connection,$sql_insert_telefono) or die (odbc_errormsg());

        $sql_insert_lavadora= "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
        VALUES('".$cve_persona."' , '".$cve_pregunta29."' , '".$cve_seccion."' , '".$cve_res_lavadora."', '".$cve_reac_lavadora."')";

        $result_insert_lavadora = odbc_exec($connection,$sql_insert_lavadora) or die (odbc_errormsg());

        $sql_insert_refri= "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
        VALUES('".$cve_persona."' , '".$cve_pregunta29."' , '".$cve_seccion."' , '".$cve_res_refri."', '".$cve_reac_refri."')";

        $result_insert_refri = odbc_exec($connection,$sql_insert_refri) or die (odbc_errormsg());

        $sql_insert_horno= "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
        VALUES('".$cve_persona."' , '".$cve_pregunta29."' , '".$cve_seccion."' , '".$cve_res_horno."', '".$cve_reac_horno."')";

        $result_insert_horno = odbc_exec($connection,$sql_insert_horno) or die (odbc_errormsg());

        $sql_insert_internet= "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
        VALUES('".$cve_persona."' , '".$cve_pregunta29."' , '".$cve_seccion."' , '".$cve_res_internet."', '".$cve_reac_internet."')";

        $result_insert_internet = odbc_exec($connection,$sql_insert_internet) or die (odbc_errormsg());

        $sql_insert_television= "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
        VALUES('".$cve_persona."' , '".$cve_pregunta29."' , '".$cve_seccion."' , '".$cve_res_television."', '".$cve_reac_television."')";

        $result_insert_television = odbc_exec($connection,$sql_insert_television) or die (odbc_errormsg());

        $sql_insert_tablet= "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
        VALUES('".$cve_persona."' , '".$cve_pregunta29."' , '".$cve_seccion."' , '".$cve_res_tablet."', '".$cve_reac_tablet."')";

        $result_insert_tablet = odbc_exec($connection,$sql_insert_tablet) or die (odbc_errormsg());

      //Insertar pregunta 30
        $sql_insert_cuartos = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta) 
        VALUES('".$cve_persona."' , '".$cve_pregunta30."' , '".$cve_seccion."' , '".$cve_res_cuartos."')";

       $result_insert_cuartos = odbc_exec($connection,$sql_insert_cuartos) or die (odbc_errormsg());

        //Insertar pregunta 31
        $sql_insert_computadora= "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
        VALUES('".$cve_persona."' , '".$cve_pregunta31."' , '".$cve_seccion."' , '".$cve_res_computadora."', '".$cve_reac_computadora."')";

        $result_insert_computadora = odbc_exec($connection,$sql_insert_computadora) or die (odbc_errormsg());

        $sql_insert_tele= "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
        VALUES('".$cve_persona."' , '".$cve_pregunta31."' , '".$cve_seccion."' , '".$cve_res_tele."', '".$cve_reac_tele."')";

        $result_insert_tele = odbc_exec($connection,$sql_insert_tele) or die (odbc_errormsg());

        $sql_insert_auto= "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
        VALUES('".$cve_persona."' , '".$cve_pregunta31."' , '".$cve_seccion."' , '".$cve_res_auto."', '".$cve_reac_auto."')";

        $result_insert_auto = odbc_exec($connection,$sql_insert_auto) or die (odbc_errormsg());

        $sql_insert_banos= "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
        VALUES('".$cve_persona."' , '".$cve_pregunta31."' , '".$cve_seccion."' , '".$cve_res_banos."', '".$cve_reac_banos."')";

        $result_insert_banos = odbc_exec($connection,$sql_insert_banos) or die (odbc_errormsg());

        //Insertar pregunta 32
        $sql_insert_vacaciones = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta) 
        VALUES('".$cve_persona."' , '".$cve_pregunta32."' , '".$cve_seccion."' , '".$cve_res_vacaciones."')";

        $result_insert_vacaciones = odbc_exec($connection,$sql_insert_vacaciones) or die (odbc_errormsg());

        echo "Guardando";


    }catch(Exception $e){

        echo('Error al insertar familiar: ' . $e->GetMessage());
    }


?>