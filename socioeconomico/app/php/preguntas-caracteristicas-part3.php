<?php

    require("../conexion/conexion.php");

    $cve_persona = $_POST['clave_aspi'];
    $cve_seccion = $_POST['seccion-caracteristicas'];

    $cve_pregunta17 = $_POST['pregunta-17'];
    $cve_pregunta18 = $_POST['pregunta-18'];
    $cve_pregunta19 = $_POST['pregunta-19'];


    /*Reactivos pregunta 17 */
    $cve_reactivo_captar = $_POST['rea-captar'];
    $cve_reactivo_predecir = $_POST ['rea-predecir'];
    $cve_reactivo_emociones = $_POST['rea-emociones'];
    $cve_reactivo_ponerme = $_POST['rea-ponerme'];
    $cve_reactivo_identificar = $_POST ['rea-identificar'];
    $cve_reactivo_entrometido = $_POST['rea-entrometido'];
    $cve_reactivo_entiendan = $_POST ['rea-entiendan'];
    
    
    /*Reactivos pregunta 18 */
    $cve_reactivo_atenciones = $_POST['rea-atenciones'];
    $cve_reactivo_dibujos = $_POST ['rea-dibujos'];
    $cve_reactivo_estructura = $_POST['rea-estructura'];
    $cve_reactivo_momento = $_POST['rea-momento'];
    $cve_reactivo_ideas = $_POST ['rea-ideas'];
    $cve_reactivo_ejemplos = $_POST['rea-ejemplos'];
    $cve_reactivo_palabras = $_POST ['rea-palabras'];
    $cve_reactivo_conozco = $_POST ['rea-conozco'];
    $cve_reactivo_disponible = $_POST ['rea-disponible'];
    $cve_reactivo_especificas = $_POST ['rea-especificas'];
    
    
    /*Reactivos pregunta 19 */
    $cve_reactivo_disculpa = $_POST['rea-disculpa'];
    $cve_reactivo_ayuda = $_POST ['rea-ayuda'];
    $cve_reactivo_tema = $_POST['rea-tema'];
    $cve_reactivo_dificultades = $_POST['rea-dificultades'];
    $cve_reactivo_miedo = $_POST ['rea-miedo'];
    $cve_reactivo_critica = $_POST['rea-critica'];
    
    
    /*Respuestas de pregunta 17 */
    $cve_res_captar = $_POST['captar'];
    $cve_res_predecir = $_POST['predecir'];
    $cve_res_emociones = $_POST['emociones'];
    $cve_res_ponerme = $_POST['ponerme'];
    $cve_res_identificar = $_POST['identificar'];
    $cve_res_entrometido = $_POST['entrometido'];
    $cve_res_entiendan = $_POST['entiendan']; 
    
    
    /*Respuestas de pregunta 18 */
    $cve_res_atenciones = $_POST['atenciones'];
    $cve_res_dibujos = $_POST['dibujos'];
    $cve_res_estructura = $_POST['estructura'];
    $cve_res_momento = $_POST['momento'];
    $cve_res_ideas = $_POST['ideas'];
    $cve_res_ejemplos = $_POST['ejemplos'];
    $cve_res_palabras = $_POST['palabras'];
    $cve_res_conozco = $_POST['conozco'];
    $cve_res_disponible = $_POST['disponible'];
    $cve_res_especificas = $_POST['especificas']; 
    
    
    /*Respuestas de pregunta 19 */
    $cve_res_disculpa = $_POST['disculpa'];
    $cve_res_ayuda = $_POST['ayuda'];
    $cve_res_tema = $_POST['tema'];
    $cve_res_dificultades = $_POST['dificultades'];
    $cve_res_miedo = $_POST['miedo'];
    $cve_res_critica = $_POST['critica'];


    try{

         //Insertar respuestas pregunta 17
        $sql_insert_captar = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
         VALUES('".$cve_persona."' , '".$cve_pregunta17."' , '".$cve_seccion."' , '".$cve_res_captar."', '".$cve_reactivo_captar."')";

        $result_insert_captar = odbc_exec($connection,$sql_insert_captar) or die (odbc_errormsg());

        $sql_insert_predecir = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
        VALUES('".$cve_persona."' , '".$cve_pregunta17."' , '".$cve_seccion."' , '".$cve_res_predecir."', '".$cve_reactivo_predecir."')";

        $result_insert_predecir = odbc_exec($connection,$sql_insert_predecir) or die (odbc_errormsg());

        $sql_insert_emociones = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
        VALUES('".$cve_persona."' , '".$cve_pregunta17."' , '".$cve_seccion."' , '".$cve_res_emociones."', '".$cve_reactivo_emociones."')";

        $result_insert_emociones = odbc_exec($connection,$sql_insert_emociones) or die (odbc_errormsg());

        $sql_insert_ponerme = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
        VALUES('".$cve_persona."' , '".$cve_pregunta17."' , '".$cve_seccion."' , '".$cve_res_ponerme."', '".$cve_reactivo_ponerme."')";

        $result_insert_ponerme = odbc_exec($connection,$sql_insert_ponerme) or die (odbc_errormsg());

        $sql_insert_identificar = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
        VALUES('".$cve_persona."' , '".$cve_pregunta17."' , '".$cve_seccion."' , '".$cve_res_identificar."', '".$cve_reactivo_identificar."')";

        $result_insert_identificar = odbc_exec($connection,$sql_insert_identificar) or die (odbc_errormsg());

        $sql_insert_entrometido = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
        VALUES('".$cve_persona."' , '".$cve_pregunta17."' , '".$cve_seccion."' , '".$cve_res_entrometido."', '".$cve_reactivo_entrometido."')";

        $result_insert_entrometido = odbc_exec($connection,$sql_insert_entrometido) or die (odbc_errormsg());

        $sql_insert_entiendan = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
        VALUES('".$cve_persona."' , '".$cve_pregunta17."' , '".$cve_seccion."' , '".$cve_res_entiendan."', '".$cve_reactivo_entiendan."')";

       $result_insert_entiendan = odbc_exec($connection,$sql_insert_entiendan) or die (odbc_errormsg());


       //Insertar respuestas pregunta 18
        $sql_insert_atenciones = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
        VALUES('".$cve_persona."' , '".$cve_pregunta18."' , '".$cve_seccion."' , '".$cve_res_atenciones."', '".$cve_reactivo_atenciones."')";

       $result_insert_atenciones = odbc_exec($connection,$sql_insert_atenciones) or die (odbc_errormsg());

       $sql_insert_dibujos = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
       VALUES('".$cve_persona."' , '".$cve_pregunta18."' , '".$cve_seccion."' , '".$cve_res_dibujos."', '".$cve_reactivo_dibujos."')";

      $result_insert_dibujos = odbc_exec($connection,$sql_insert_dibujos) or die (odbc_errormsg());

      $sql_insert_estructura = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
      VALUES('".$cve_persona."' , '".$cve_pregunta18."' , '".$cve_seccion."' , '".$cve_res_estructura."', '".$cve_reactivo_estructura."')";

      $result_insert_estructura = odbc_exec($connection,$sql_insert_estructura) or die (odbc_errormsg());

      $sql_insert_momento = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
      VALUES('".$cve_persona."' , '".$cve_pregunta18."' , '".$cve_seccion."' , '".$cve_res_momento."', '".$cve_reactivo_momento."')";

      $result_insert_momento = odbc_exec($connection,$sql_insert_momento) or die (odbc_errormsg());

      $sql_insert_ideas = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
      VALUES('".$cve_persona."' , '".$cve_pregunta18."' , '".$cve_seccion."' , '".$cve_res_ideas."', '".$cve_reactivo_ideas."')";

      $result_insert_ideas = odbc_exec($connection,$sql_insert_ideas) or die (odbc_errormsg());

      $sql_insert_ejemplos = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
      VALUES('".$cve_persona."' , '".$cve_pregunta18."' , '".$cve_seccion."' , '".$cve_res_ejemplos."', '".$cve_reactivo_ejemplos."')";

      $result_insert_ejemplos = odbc_exec($connection,$sql_insert_ejemplos) or die (odbc_errormsg());

      $sql_insert_palabras = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
      VALUES('".$cve_persona."' , '".$cve_pregunta18."' , '".$cve_seccion."' , '".$cve_res_palabras."', '".$cve_reactivo_palabras."')";

      $result_insert_palabras = odbc_exec($connection,$sql_insert_palabras) or die (odbc_errormsg());

      $sql_insert_conozco = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
      VALUES('".$cve_persona."' , '".$cve_pregunta18."' , '".$cve_seccion."' , '".$cve_res_conozco."', '".$cve_reactivo_conozco."')";

      $result_insert_conozco = odbc_exec($connection,$sql_insert_conozco) or die (odbc_errormsg());

      $sql_insert_disponible = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
      VALUES('".$cve_persona."' , '".$cve_pregunta18."' , '".$cve_seccion."' , '".$cve_res_disponible."', '".$cve_reactivo_disponible."')";

      $result_insert_disponible = odbc_exec($connection,$sql_insert_disponible) or die (odbc_errormsg());

      $sql_insert_especificas = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
      VALUES('".$cve_persona."' , '".$cve_pregunta18."' , '".$cve_seccion."' , '".$cve_res_especificas."', '".$cve_reactivo_especificas."')";

     $result_insert_especificas = odbc_exec($connection,$sql_insert_especificas) or die (odbc_errormsg());


     //Respuestas de pregunta 19
     $sql_insert_disculpa = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
     VALUES('".$cve_persona."' , '".$cve_pregunta19."' , '".$cve_seccion."' , '".$cve_res_disculpa."', '".$cve_reactivo_disculpa."')";

     $result_insert_disculpa = odbc_exec($connection,$sql_insert_disculpa) or die (odbc_errormsg());

     $sql_insert_ayuda = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
     VALUES('".$cve_persona."' , '".$cve_pregunta19."' , '".$cve_seccion."' , '".$cve_res_ayuda."', '".$cve_reactivo_ayuda."')";

    $result_insert_ayuda = odbc_exec($connection,$sql_insert_ayuda) or die (odbc_errormsg());

    $sql_insert_tema = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
    VALUES('".$cve_persona."' , '".$cve_pregunta19."' , '".$cve_seccion."' , '".$cve_res_tema."', '".$cve_reactivo_tema."')";

    $result_insert_tema = odbc_exec($connection,$sql_insert_tema) or die (odbc_errormsg());

    $sql_insert_dificultades = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
    VALUES('".$cve_persona."' , '".$cve_pregunta19."' , '".$cve_seccion."' , '".$cve_res_dificultades."', '".$cve_reactivo_dificultades."')";

    $result_insert_dificultades = odbc_exec($connection,$sql_insert_dificultades) or die (odbc_errormsg());

    $sql_insert_miedo = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
    VALUES('".$cve_persona."' , '".$cve_pregunta19."' , '".$cve_seccion."' , '".$cve_res_miedo."', '".$cve_reactivo_miedo."')";

    $result_insert_miedo = odbc_exec($connection,$sql_insert_miedo) or die (odbc_errormsg());

    $sql_insert_critica = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
    VALUES('".$cve_persona."' , '".$cve_pregunta19."' , '".$cve_seccion."' , '".$cve_res_critica."', '".$cve_reactivo_critica."')";

    $result_insert_critica = odbc_exec($connection,$sql_insert_critica) or die (odbc_errormsg());

       echo "Guardado";

    }catch(Exception $e){

        echo('Error al insertar caracteristicas 3: ' . $e->GetMessage());
    }
    
        
?>
        