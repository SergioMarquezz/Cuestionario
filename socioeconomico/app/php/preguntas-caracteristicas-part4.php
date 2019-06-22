<?php

    require("../conexion/conexion.php");

    $cve_persona = $_POST['clave_aspi'];
    $cve_seccion = $_POST['seccion-caracteristicas'];

    $cve_pregunta20 = $_POST['pregunta-20'];
    $cve_pregunta21 = $_POST['pregunta-21'];
    $cve_pregunta22 = $_POST['pregunta-22'];


    /*Reactivos pregunta 20 */
    $cve_reactivo_escolares = $_POST['rea-escolares'];
    $cve_reactivo_musica = $_POST ['rea-musica'];
    $cve_reactivo_ingles = $_POST['rea-ingles'];
    $cve_reactivo_verbal = $_POST['rea-verbal'];
    $cve_reactivo_ordenar = $_POST ['rea-ordenar'];
    $cve_reactivo_opinion = $_POST['rea-opinion'];
    $cve_reactivo_laboratorio = $_POST ['rea-laboratorio'];
    $cve_reactivo_dialogo = $_POST ['rea-dialogo'];
    $cve_reactivo_dificultad = $_POST ['rea-dificultad'];
    $cve_reactivo_saludable = $_POST ['rea-saludable'];
    $cve_reactivo_escrito = $_POST ['rea-escrito'];
    $cve_reactivo_excel = $_POST ['rea-excel'];
    $cve_reactivo_objetivo = $_POST ['rea-objetivo'];
    $cve_reactivo_aprender = $_POST ['rea-aprender'];
    $cve_reactivo_leyes = $_POST ['rea-leyes'];
    $cve_reactivo_ambiente = $_POST ['rea-ambiente'];


    /*Reactivos pregunta 22 */
    $cve_reactivo_golpearan = $_POST ['rea-golpearan'];
    $cve_reactivo_ignorar = $_POST ['rea-ignorar'];
    $cve_reactivo_facebook = $_POST ['rea-facebook'];
    $cve_reactivo_groserias = $_POST ['rea-groserias'];
    $cve_reactivo_robar = $_POST ['rea-robar'];
    $cve_reactivo_forzar = $_POST ['rea-forzar'];



    /*Respuestas pregunta 20 */
    $cve_res_escolares = $_POST['escolares'];
    $cve_res_musica = $_POST['musica'];
    $cve_res_ingles = $_POST['ingles'];
    $cve_res_verbal = $_POST['verbal'];
    $cve_res_ordenar = $_POST['ordenar'];
    $cve_res_opinion = $_POST['opinion'];
    $cve_res_laboratorio = $_POST['laboratorio']; 
    $cve_res_dialogo = $_POST['dialogo']; 
    $cve_res_dificultad = $_POST['dificultad'];
    $cve_res_saludable = $_POST['saludable'];
    $cve_res_escrito = $_POST['escrito'];
    $cve_res_excel = $_POST['excel'];
    $cve_res_objetivo = $_POST['objetivo'];
    $cve_res_aprender = $_POST['aprender'];
    $cve_res_leyes = $_POST['leyes'];
    $cve_res_ambiente = $_POST['ambiente'];
      
    
    /*Respuestas pregunta 21 */
    $cve_res_max_estudios = $_POST['max-estudios'];


     /*Respuestas pregunta 22 */
    $cve_res_golpearan = $_POST['golpearan'];
    $cve_res_ignorar = $_POST['ignorar'];
    $cve_res_facebook = $_POST['facebook'];
    $cve_res_groserias = $_POST['groserias'];
    $cve_res_robar = $_POST['robar'];
    $cve_res_forzar = $_POST['forzar'];

    try{

        //Insertar respuestas pregunta 20
        $sql_insert_escolares = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
        VALUES('".$cve_persona."' , '".$cve_pregunta20."' , '".$cve_seccion."' , '".$cve_res_escolares."', '".$cve_reactivo_escolares."')";

        $result_insert_escolares = odbc_exec($connection,$sql_insert_escolares) or die (odbc_errormsg());

        $sql_insert_musica = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
        VALUES('".$cve_persona."' , '".$cve_pregunta20."' , '".$cve_seccion."' , '".$cve_res_musica."', '".$cve_reactivo_musica."')";

        $result_insert_musica = odbc_exec($connection,$sql_insert_musica) or die (odbc_errormsg());

        $sql_insert_ingles = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
        VALUES('".$cve_persona."' , '".$cve_pregunta20."' , '".$cve_seccion."' , '".$cve_res_ingles."', '".$cve_reactivo_ingles."')";

        $result_insert_ingles = odbc_exec($connection,$sql_insert_ingles) or die (odbc_errormsg());

        $sql_insert_verbal = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
        VALUES('".$cve_persona."' , '".$cve_pregunta20."' , '".$cve_seccion."' , '".$cve_res_verbal."', '".$cve_reactivo_verbal."')";

        $result_insert_verbal = odbc_exec($connection,$sql_insert_verbal) or die (odbc_errormsg());

        $sql_insert_ordenar = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
        VALUES('".$cve_persona."' , '".$cve_pregunta20."' , '".$cve_seccion."' , '".$cve_res_ordenar."', '".$cve_reactivo_ordenar."')";

        $result_insert_ordenar = odbc_exec($connection,$sql_insert_ordenar) or die (odbc_errormsg());

        $sql_insert_opinion = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
        VALUES('".$cve_persona."' , '".$cve_pregunta20."' , '".$cve_seccion."' , '".$cve_res_opinion."', '".$cve_reactivo_opinion."')";

        $result_insert_opinion = odbc_exec($connection,$sql_insert_opinion) or die (odbc_errormsg());

        $sql_insert_laboratorio = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
        VALUES('".$cve_persona."' , '".$cve_pregunta20."' , '".$cve_seccion."' , '".$cve_res_laboratorio."', '".$cve_reactivo_laboratorio."')";

        $result_insert_laboratorio = odbc_exec($connection,$sql_insert_laboratorio) or die (odbc_errormsg());

        $sql_insert_dialogo = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
        VALUES('".$cve_persona."' , '".$cve_pregunta20."' , '".$cve_seccion."' , '".$cve_res_dialogo."', '".$cve_reactivo_dialogo."')";

        $result_insert_dialogo = odbc_exec($connection,$sql_insert_dialogo) or die (odbc_errormsg());

        $sql_insert_dificultad = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
        VALUES('".$cve_persona."' , '".$cve_pregunta20."' , '".$cve_seccion."' , '".$cve_res_dificultad."', '".$cve_reactivo_dificultad."')";

        $result_insert_dificultad = odbc_exec($connection,$sql_insert_dificultad) or die (odbc_errormsg());

        $sql_insert_saludable = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
        VALUES('".$cve_persona."' , '".$cve_pregunta20."' , '".$cve_seccion."' , '".$cve_res_saludable."', '".$cve_reactivo_saludable."')";

        $result_insert_saludable = odbc_exec($connection,$sql_insert_saludable) or die (odbc_errormsg());

        $sql_insert_escrito = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
        VALUES('".$cve_persona."' , '".$cve_pregunta20."' , '".$cve_seccion."' , '".$cve_res_escrito."', '".$cve_reactivo_escrito."')";

        $result_insert_escrito = odbc_exec($connection,$sql_insert_escrito) or die (odbc_errormsg());

        $sql_insert_excel = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
        VALUES('".$cve_persona."' , '".$cve_pregunta20."' , '".$cve_seccion."' , '".$cve_res_excel."', '".$cve_reactivo_excel."')";

        $result_insert_excel = odbc_exec($connection,$sql_insert_excel) or die (odbc_errormsg());

        $sql_insert_objetivo = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
        VALUES('".$cve_persona."' , '".$cve_pregunta20."' , '".$cve_seccion."' , '".$cve_res_objetivo."', '".$cve_reactivo_objetivo."')";

        $result_insert_objetivo = odbc_exec($connection,$sql_insert_objetivo) or die (odbc_errormsg());

        $sql_insert_aprender = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
        VALUES('".$cve_persona."' , '".$cve_pregunta20."' , '".$cve_seccion."' , '".$cve_res_aprender."', '".$cve_reactivo_aprender."')";

        $result_insert_aprender = odbc_exec($connection,$sql_insert_aprender) or die (odbc_errormsg());

        $sql_insert_leyes = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
        VALUES('".$cve_persona."' , '".$cve_pregunta20."' , '".$cve_seccion."' , '".$cve_res_leyes."', '".$cve_reactivo_leyes."')";

        $result_insert_leyes = odbc_exec($connection,$sql_insert_leyes) or die (odbc_errormsg());

        $sql_insert_ambiente = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
        VALUES('".$cve_persona."' , '".$cve_pregunta20."' , '".$cve_seccion."' , '".$cve_res_ambiente."', '".$cve_reactivo_ambiente."')";

        $result_insert_ambiente = odbc_exec($connection,$sql_insert_ambiente) or die (odbc_errormsg());


         //Insertar respuestas pregunta 21
        $sql_insert_max_estudios = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta) 
        VALUES('".$cve_persona."' , '".$cve_pregunta21."' , '".$cve_seccion."' , '".$cve_res_max_estudios."')";

        $result_insert_max_estudios = odbc_exec($connection,$sql_insert_max_estudios) or die (odbc_errormsg());

        
        //Insertar respuestas pregunta 22
        $sql_insert_golpearan = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
        VALUES('".$cve_persona."' , '".$cve_pregunta22."' , '".$cve_seccion."' , '".$cve_res_golpearan."', '".$cve_reactivo_golpearan."')";

        $result_insert_golpearan = odbc_exec($connection,$sql_insert_golpearan) or die (odbc_errormsg());

        $sql_insert_ignorar = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
        VALUES('".$cve_persona."' , '".$cve_pregunta22."' , '".$cve_seccion."' , '".$cve_res_ignorar."', '".$cve_reactivo_ignorar."')";

        $result_insert_ignorar = odbc_exec($connection,$sql_insert_ignorar) or die (odbc_errormsg());

        $sql_insert_facebook = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
        VALUES('".$cve_persona."' , '".$cve_pregunta22."' , '".$cve_seccion."' , '".$cve_res_facebook."', '".$cve_reactivo_facebook."')";

        $result_insert_facebook = odbc_exec($connection,$sql_insert_facebook) or die (odbc_errormsg());

        $sql_insert_groserias = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
        VALUES('".$cve_persona."' , '".$cve_pregunta22."' , '".$cve_seccion."' , '".$cve_res_groserias."', '".$cve_reactivo_groserias."')";

        $result_insert_groserias = odbc_exec($connection,$sql_insert_groserias) or die (odbc_errormsg());

        $sql_insert_robar = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
        VALUES('".$cve_persona."' , '".$cve_pregunta22."' , '".$cve_seccion."' , '".$cve_res_robar."', '".$cve_reactivo_robar."')";

        $result_insert_robar = odbc_exec($connection,$sql_insert_robar) or die (odbc_errormsg());

        $sql_insert_forzar = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
        VALUES('".$cve_persona."' , '".$cve_pregunta22."' , '".$cve_seccion."' , '".$cve_res_forzar."', '".$cve_reactivo_forzar."')";

        $result_insert_forzar = odbc_exec($connection,$sql_insert_forzar) or die (odbc_errormsg());


        echo "Guardando";

    }catch(Exception $e){

        echo('Error al insertar caracteristicas 4: ' . $e->GetMessage());
    }

?>