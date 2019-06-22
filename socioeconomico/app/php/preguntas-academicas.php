<?php

    require("../conexion/conexion.php");

    $cve_persona = $_POST['clave_aspi'];
    $cve_seccion = $_POST['seccion-academicas'];

    $cve_pregunta33 = $_POST['pregunta-33'];
    $cve_pregunta34 = $_POST['pregunta-34'];
    $cve_pregunta35 = $_POST['pregunta-35'];
    $cve_pregunta36 = $_POST['pregunta-36'];

    //Reactivos de pregunta 33
    $cve_reac_folletos = $_POST['rea-folletos'];
    $cve_reac_paginas = $_POST['rea-paginas'];
    $cve_reac_guias = $_POST['rea-guias'];
    $cve_reac_test = $_POST['rea-test'];
     

    //Reactivos de pregunta 34
    $cve_reac_padres = $_POST['rea-padres'];
    $cve_reac_amigos = $_POST['rea-amigos'];
    $cve_reac_psicologos = $_POST['rea-psicologos'];
    $cve_reac_hermanos = $_POST['rea-hermanos'];
    $cve_reac_profesores = $_POST['rea-profesores'];

     //Reactivos de pregunta 36
     $cve_reac_escuela = $_POST['rea-curso-escuela'];
     $cve_reac_particular = $_POST['rea-curso-particular'];
     $cve_reac_maestro = $_POST['rea-curso-maestro'];


    /*Respuestas de pregunta 33 */
    $cve_res_folletos = $_POST['folletos'];
    $cve_res_paginas = $_POST['paginas'];
    $cve_res_guias = $_POST['guias'];
    $cve_res_test = $_POST['test'];

     /*Respuestas de pregunta 34 */
     $cve_res_padres = $_POST['padres'];
     $cve_res_amigos = $_POST['amigos'];
     $cve_res_psicologos = $_POST['psicologos'];
     $cve_res_hermanos = $_POST['hermanos'];
     $cve_res_profesores = $_POST['profesores'];

      /*Respuestas de pregunta 35 */
      $cve_res_exanii = $_POST['exanii'];

     /*Respuestas de pregunta 36 */
     $cve_res_escuela = $_POST['curso-escuela'];
     $cve_res_particular = $_POST['curso-particular'];
     $cve_res_maestro = $_POST['curso-maestro'];


     try{

            //Insertar pregunta 33
            $sql_insert_folletos = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
            VALUES('".$cve_persona."' , '".$cve_pregunta33."' , '".$cve_seccion."' , '".$cve_res_folletos."', '".$cve_reac_folletos."')";
    
            $result_insert_folletos = odbc_exec($connection,$sql_insert_folletos) or die (odbc_errormsg());

            $sql_insert_paginas = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
            VALUES('".$cve_persona."' , '".$cve_pregunta33."' , '".$cve_seccion."' , '".$cve_res_paginas."', '".$cve_reac_paginas."')";
    
            $result_insert_paginas = odbc_exec($connection,$sql_insert_paginas) or die (odbc_errormsg());

            $sql_insert_guias = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
            VALUES('".$cve_persona."' , '".$cve_pregunta33."' , '".$cve_seccion."' , '".$cve_res_guias."', '".$cve_reac_guias."')";
    
            $result_insert_guias = odbc_exec($connection,$sql_insert_guias) or die (odbc_errormsg());

            $sql_insert_test = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
            VALUES('".$cve_persona."' , '".$cve_pregunta33."' , '".$cve_seccion."' , '".$cve_res_test."', '".$cve_reac_test."')";
    
            $result_insert_test = odbc_exec($connection,$sql_insert_test) or die (odbc_errormsg());


             //Insertar pregunta 34
            $sql_insert_padres = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
            VALUES('".$cve_persona."' , '".$cve_pregunta34."' , '".$cve_seccion."' , '".$cve_res_padres."', '".$cve_reac_padres."')";
    
            $result_insert_padres = odbc_exec($connection,$sql_insert_padres) or die (odbc_errormsg());

            $sql_insert_amigos = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
            VALUES('".$cve_persona."' , '".$cve_pregunta34."' , '".$cve_seccion."' , '".$cve_res_amigos."', '".$cve_reac_amigos."')";
    
            $result_insert_amigos = odbc_exec($connection,$sql_insert_amigos) or die (odbc_errormsg());

            $sql_insert_psicologos = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
            VALUES('".$cve_persona."' , '".$cve_pregunta34."' , '".$cve_seccion."' , '".$cve_res_psicologos."', '".$cve_reac_psicologos."')";
    
            $result_insert_psicologos = odbc_exec($connection,$sql_insert_psicologos) or die (odbc_errormsg());

            $sql_insert_hermanos = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
            VALUES('".$cve_persona."' , '".$cve_pregunta34."' , '".$cve_seccion."' , '".$cve_res_hermanos."', '".$cve_reac_hermanos."')";
    
            $result_insert_hermanos = odbc_exec($connection,$sql_insert_hermanos) or die (odbc_errormsg());

            $sql_insert_profesores = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
            VALUES('".$cve_persona."' , '".$cve_pregunta34."' , '".$cve_seccion."' , '".$cve_res_profesores."', '".$cve_reac_profesores."')";
    
            $result_insert_profesores = odbc_exec($connection,$sql_insert_profesores) or die (odbc_errormsg());

            //Insertar pregunta 35
            $sql_insert_exanii = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta) 
            VALUES('".$cve_persona."' , '".$cve_pregunta35."' , '".$cve_seccion."' , '".$cve_res_exanii."')";
    
            $result_insert_exanii = odbc_exec($connection,$sql_insert_exanii) or die (odbc_errormsg());

             //Insertar pregunta 36
            $sql_insert_escuela = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
            VALUES('".$cve_persona."' , '".$cve_pregunta36."' , '".$cve_seccion."' , '".$cve_res_escuela."', '".$cve_reac_escuela."')";
    
            $result_insert_escuela = odbc_exec($connection,$sql_insert_escuela) or die (odbc_errormsg());

            $sql_insert_particular = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
            VALUES('".$cve_persona."' , '".$cve_pregunta36."' , '".$cve_seccion."' , '".$cve_res_particular."', '".$cve_reac_particular."')";
    
            $result_insert_particular = odbc_exec($connection,$sql_insert_particular) or die (odbc_errormsg());

            $sql_insert_maestro = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
            VALUES('".$cve_persona."' , '".$cve_pregunta36."' , '".$cve_seccion."' , '".$cve_res_maestro."', '".$cve_reac_maestro."')";
    
            $result_insert_maestro = odbc_exec($connection,$sql_insert_maestro) or die (odbc_errormsg());

            echo "Guardando";

     }catch(Exception $e){

        echo('Error al insertar academicas: ' . $e->GetMessage());
     }
 
     
?>