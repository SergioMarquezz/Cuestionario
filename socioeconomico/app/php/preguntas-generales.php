<?php

    require("../conexion/conexion.php");


    $opcion = $_POST['opcion'];

    //Pregunta 1

    //Variables para la pregunta 1
    $cve_persona = $_POST['clave_aspi'];
    $cve_pregunta = $_POST['pregunta-1'];
    $cve_seccion = $_POST['seccion-datos'];

    //Respuestas de los reactivos pregunta 1
    $cve_respuesta_caminar = $_POST['caminar'];
    $cve_respuesta_conducta = $_POST['conducta'];
    $cve_respuesta_depre = $_POST['depresion'];
    $cve_respuesta_bulimia = $_POST['bulimia'];
    $cve_respuesta_oir = $_POST['escuchar'];
    $cve_respuesta_estres = $_POST['estres'];
    $cve_respuesta_aten = $_POST['atencion'];
    $cve_respuesta_ver = $_POST['ver'];
    $cve_respuesta_agredir = $_POST['agresividad'];
    $cve_respuesta_obesidad = $_POST['obesidad'];

    //Reactivos de la pregunta 1
    $cve_reactivo_caminar = $_POST['rea-caminar'];
    $cve_reactivo_conducta = $_POST['rea-conducta'];
    $cve_reactivo_depre = $_POST['rea-depresion'];
    $cve_reactivo_bulimia = $_POST['rea-bulimia'];
    $cve_reactivo_oir = $_POST['rea-escuchar'];
    $cve_reactivo_estres = $_POST['rea-estres'];
    $cve_reactivo_aten = $_POST['rea-atencion'];
    $cve_reactivo_ver = $_POST['rea-ver'];
    $cve_reactivo_agredir = $_POST['rea-agresividad'];
    $cve_reactivo_obesidad = $_POST['rea-obesidad'];


    //Pregunta 2
    $cve_pregunta2 = $_POST['pregunta-2'];

    //Reactivos de la pregunta 2

    $cve_reactivo_madre = $_POST['rea-madre'];
    $cve_reactivo_padre = $_POST['rea-padre'];

    //Respuestas de los reactivos pregunta 2
    $cve_respuesta_madre = $_POST['madre'];
    $cve_respuesta_padre = $_POST['padre'];

    $cve_lengua_madre = $_POST['lenguas-madre'];
    $cve_lengua_padre = $_POST['lenguas-padre'];


    try{

        if($opcion == "sin lengua"){

            //Registros pregunta 1 registro respuesta 1
            $sql_insert_res1 = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
            VALUES('".$cve_persona."' , '".$cve_pregunta."' , '".$cve_seccion."' , '".$cve_respuesta_caminar."', '".$cve_reactivo_caminar."')";

            $result_insert_res1 = odbc_exec($connection,$sql_insert_res1) or die (odbc_errormsg());

            //Registro respuesta 2
            $sql_insert_res2 = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
            VALUES('".$cve_persona."' , '".$cve_pregunta."' , '".$cve_seccion."' , '".$cve_respuesta_oir."', '".$cve_reactivo_oir."')";

            $result_insert_res2 = odbc_exec($connection,$sql_insert_res2) or die (odbc_errormsg());
            
             //Registro respuesta 3
            $sql_insert_res3 = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
            VALUES('".$cve_persona."' , '".$cve_pregunta."' , '".$cve_seccion."' , '".$cve_respuesta_ver."', '".$cve_reactivo_ver."')";

            $result_insert_res3 = odbc_exec($connection,$sql_insert_res3) or die (odbc_errormsg());

             //Registro respuesta 4
            $sql_insert_res4 = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
            VALUES('".$cve_persona."' , '".$cve_pregunta."' , '".$cve_seccion."' , '".$cve_respuesta_conducta."', '".$cve_reactivo_conducta."')";

            $result_insert_res4 = odbc_exec($connection,$sql_insert_res4) or die (odbc_errormsg());

             //Registro respuesta 5
            $sql_insert_res5 = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
            VALUES('".$cve_persona."' , '".$cve_pregunta."' , '".$cve_seccion."' , '".$cve_respuesta_estres."', '".$cve_reactivo_estres."')";

            $result_insert_res5 = odbc_exec($connection,$sql_insert_res5) or die (odbc_errormsg());

             //Registro respuesta 6
            $sql_insert_res6 = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
            VALUES('".$cve_persona."' , '".$cve_pregunta."' , '".$cve_seccion."' , '".$cve_respuesta_agredir."', '".$cve_reactivo_agredir."')";

            $result_insert_res6 = odbc_exec($connection,$sql_insert_res6) or die (odbc_errormsg());

             //Registro respuesta 7
            $sql_insert_res7 = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
            VALUES('".$cve_persona."' , '".$cve_pregunta."' , '".$cve_seccion."' , '".$cve_respuesta_depre."', '".$cve_reactivo_depre."')";

            $result_insert_res7 = odbc_exec($connection,$sql_insert_res7) or die (odbc_errormsg());

             //Registro respuesta 8
            $sql_insert_res8 = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
            VALUES('".$cve_persona."' , '".$cve_pregunta."' , '".$cve_seccion."' , '".$cve_respuesta_aten."', '".$cve_reactivo_aten."')";

            $result_insert_res8 = odbc_exec($connection,$sql_insert_res8) or die (odbc_errormsg());

             //Registro respuesta 9
            $sql_insert_res9 = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
            VALUES('".$cve_persona."' , '".$cve_pregunta."' , '".$cve_seccion."' , '".$cve_respuesta_obesidad."', '".$cve_reactivo_obesidad."')";

            $result_insert_res9 = odbc_exec($connection,$sql_insert_res9) or die (odbc_errormsg());

             //Registro respuesta 9
            $sql_insert_res10 = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
            VALUES('".$cve_persona."' , '".$cve_pregunta."' , '".$cve_seccion."' , '".$cve_respuesta_bulimia."', '".$cve_reactivo_bulimia."')";

            $result_insert_res10 = odbc_exec($connection,$sql_insert_res10) or die (odbc_errormsg());


            //Registros pregunta 2 registro respuesta 1
            $sql_insert_madre = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
            VALUES('".$cve_persona."' , '".$cve_pregunta2."' , '".$cve_seccion."' , '".$cve_respuesta_madre."', '".$cve_reactivo_madre ."')";

            $result_insert_madre = odbc_exec($connection,$sql_insert_madre) or die (odbc_errormsg());

            //Registro respuesta 2
            $sql_insert_padre = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
            VALUES('".$cve_persona."' , '".$cve_pregunta2."' , '".$cve_seccion."' , '".$cve_respuesta_padre."', '".$cve_reactivo_padre ."')";

            $result_insert_padre = odbc_exec($connection,$sql_insert_padre) or die (odbc_errormsg());


            echo "Guardado";
        }

        else if($opcion == "lengua madre"){

             //Registros pregunta 1 registro respuesta 1
             $sql_insert_res1 = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
             VALUES('".$cve_persona."' , '".$cve_pregunta."' , '".$cve_seccion."' , '".$cve_respuesta_caminar."', '".$cve_reactivo_caminar."')";
 
             $result_insert_res1 = odbc_exec($connection,$sql_insert_res1) or die (odbc_errormsg());
 
             //Registro respuesta 2
             $sql_insert_res2 = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
             VALUES('".$cve_persona."' , '".$cve_pregunta."' , '".$cve_seccion."' , '".$cve_respuesta_oir."', '".$cve_reactivo_oir."')";
 
             $result_insert_res2 = odbc_exec($connection,$sql_insert_res2) or die (odbc_errormsg());
             
              //Registro respuesta 3
             $sql_insert_res3 = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
             VALUES('".$cve_persona."' , '".$cve_pregunta."' , '".$cve_seccion."' , '".$cve_respuesta_ver."', '".$cve_reactivo_ver."')";
 
             $result_insert_res3 = odbc_exec($connection,$sql_insert_res3) or die (odbc_errormsg());
 
              //Registro respuesta 4
             $sql_insert_res4 = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
             VALUES('".$cve_persona."' , '".$cve_pregunta."' , '".$cve_seccion."' , '".$cve_respuesta_conducta."', '".$cve_reactivo_conducta."')";
 
             $result_insert_res4 = odbc_exec($connection,$sql_insert_res4) or die (odbc_errormsg());
 
              //Registro respuesta 5
             $sql_insert_res5 = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
             VALUES('".$cve_persona."' , '".$cve_pregunta."' , '".$cve_seccion."' , '".$cve_respuesta_estres."', '".$cve_reactivo_estres."')";
 
             $result_insert_res5 = odbc_exec($connection,$sql_insert_res5) or die (odbc_errormsg());
 
              //Registro respuesta 6
             $sql_insert_res6 = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
             VALUES('".$cve_persona."' , '".$cve_pregunta."' , '".$cve_seccion."' , '".$cve_respuesta_agredir."', '".$cve_reactivo_agredir."')";
 
             $result_insert_res6 = odbc_exec($connection,$sql_insert_res6) or die (odbc_errormsg());
 
              //Registro respuesta 7
             $sql_insert_res7 = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
             VALUES('".$cve_persona."' , '".$cve_pregunta."' , '".$cve_seccion."' , '".$cve_respuesta_depre."', '".$cve_reactivo_depre."')";
 
             $result_insert_res7 = odbc_exec($connection,$sql_insert_res7) or die (odbc_errormsg());
 
              //Registro respuesta 8
             $sql_insert_res8 = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
             VALUES('".$cve_persona."' , '".$cve_pregunta."' , '".$cve_seccion."' , '".$cve_respuesta_aten."', '".$cve_reactivo_aten."')";
 
             $result_insert_res8 = odbc_exec($connection,$sql_insert_res8) or die (odbc_errormsg());
 
              //Registro respuesta 9
             $sql_insert_res9 = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
             VALUES('".$cve_persona."' , '".$cve_pregunta."' , '".$cve_seccion."' , '".$cve_respuesta_obesidad."', '".$cve_reactivo_obesidad."')";
 
             $result_insert_res9 = odbc_exec($connection,$sql_insert_res9) or die (odbc_errormsg());
 
              //Registro respuesta 9
             $sql_insert_res10 = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
             VALUES('".$cve_persona."' , '".$cve_pregunta."' , '".$cve_seccion."' , '".$cve_respuesta_bulimia."', '".$cve_reactivo_bulimia."')";
 
             $result_insert_res10 = odbc_exec($connection,$sql_insert_res10) or die (odbc_errormsg());
 

            $sql_insert_lengua_ma = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_reactivo,cve_lengua)
            VALUES('".$cve_persona."', '".$cve_pregunta2."', '".$cve_seccion."', '".$cve_reactivo_madre."', '".$cve_lengua_madre."')";

            $result_lengua_ma = odbc_exec($connection,$sql_insert_lengua_ma) or die (odbc_errormsg());

            $sql_insert_padre = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
            VALUES('".$cve_persona."' , '".$cve_pregunta2."' , '".$cve_seccion."' , '".$cve_respuesta_padre."', '".$cve_reactivo_padre ."')";

            $result_insert_padre = odbc_exec($connection,$sql_insert_padre) or die (odbc_errormsg());

            echo "Guardado";

        }

        else if($opcion == "lengua padre"){

                  //Registros pregunta 1 registro respuesta 1
                  $sql_insert_res1 = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
                  VALUES('".$cve_persona."' , '".$cve_pregunta."' , '".$cve_seccion."' , '".$cve_respuesta_caminar."', '".$cve_reactivo_caminar."')";
      
                  $result_insert_res1 = odbc_exec($connection,$sql_insert_res1) or die (odbc_errormsg());
      
                  //Registro respuesta 2
                  $sql_insert_res2 = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
                  VALUES('".$cve_persona."' , '".$cve_pregunta."' , '".$cve_seccion."' , '".$cve_respuesta_oir."', '".$cve_reactivo_oir."')";
      
                  $result_insert_res2 = odbc_exec($connection,$sql_insert_res2) or die (odbc_errormsg());
                  
                   //Registro respuesta 3
                  $sql_insert_res3 = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
                  VALUES('".$cve_persona."' , '".$cve_pregunta."' , '".$cve_seccion."' , '".$cve_respuesta_ver."', '".$cve_reactivo_ver."')";
      
                  $result_insert_res3 = odbc_exec($connection,$sql_insert_res3) or die (odbc_errormsg());
      
                   //Registro respuesta 4
                  $sql_insert_res4 = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
                  VALUES('".$cve_persona."' , '".$cve_pregunta."' , '".$cve_seccion."' , '".$cve_respuesta_conducta."', '".$cve_reactivo_conducta."')";
      
                  $result_insert_res4 = odbc_exec($connection,$sql_insert_res4) or die (odbc_errormsg());
      
                   //Registro respuesta 5
                  $sql_insert_res5 = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
                  VALUES('".$cve_persona."' , '".$cve_pregunta."' , '".$cve_seccion."' , '".$cve_respuesta_estres."', '".$cve_reactivo_estres."')";
      
                  $result_insert_res5 = odbc_exec($connection,$sql_insert_res5) or die (odbc_errormsg());
      
                   //Registro respuesta 6
                  $sql_insert_res6 = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
                  VALUES('".$cve_persona."' , '".$cve_pregunta."' , '".$cve_seccion."' , '".$cve_respuesta_agredir."', '".$cve_reactivo_agredir."')";
      
                  $result_insert_res6 = odbc_exec($connection,$sql_insert_res6) or die (odbc_errormsg());
      
                   //Registro respuesta 7
                  $sql_insert_res7 = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
                  VALUES('".$cve_persona."' , '".$cve_pregunta."' , '".$cve_seccion."' , '".$cve_respuesta_depre."', '".$cve_reactivo_depre."')";
      
                  $result_insert_res7 = odbc_exec($connection,$sql_insert_res7) or die (odbc_errormsg());
      
                   //Registro respuesta 8
                  $sql_insert_res8 = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
                  VALUES('".$cve_persona."' , '".$cve_pregunta."' , '".$cve_seccion."' , '".$cve_respuesta_aten."', '".$cve_reactivo_aten."')";
      
                  $result_insert_res8 = odbc_exec($connection,$sql_insert_res8) or die (odbc_errormsg());
      
                   //Registro respuesta 9
                  $sql_insert_res9 = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
                  VALUES('".$cve_persona."' , '".$cve_pregunta."' , '".$cve_seccion."' , '".$cve_respuesta_obesidad."', '".$cve_reactivo_obesidad."')";
      
                  $result_insert_res9 = odbc_exec($connection,$sql_insert_res9) or die (odbc_errormsg());
      
                   //Registro respuesta 9
                  $sql_insert_res10 = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
                  VALUES('".$cve_persona."' , '".$cve_pregunta."' , '".$cve_seccion."' , '".$cve_respuesta_bulimia."', '".$cve_reactivo_bulimia."')";
      
                  $result_insert_res10 = odbc_exec($connection,$sql_insert_res10) or die (odbc_errormsg());
      
      
                  //Registros pregunta 2 registro respuesta 1
                  $sql_insert_madre = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
                  VALUES('".$cve_persona."' , '".$cve_pregunta2."' , '".$cve_seccion."' , '".$cve_respuesta_madre."', '".$cve_reactivo_madre ."')";
      
                  $result_insert_madre = odbc_exec($connection,$sql_insert_madre) or die (odbc_errormsg());

                $sql_insert_lengua_pa = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_reactivo,cve_lengua)
                VALUES('".$cve_persona."', '".$cve_pregunta2."', '".$cve_seccion."', '".$cve_reactivo_padre."', '".$cve_lengua_padre."')";

                $result_lengua_pa = odbc_exec($connection,$sql_insert_lengua_pa) or die (odbc_errormsg());

                echo "Guardado";

        }else if($opcion == "lenguas"){

            
                  //Registros pregunta 1 registro respuesta 1
                  $sql_insert_res1 = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
                  VALUES('".$cve_persona."' , '".$cve_pregunta."' , '".$cve_seccion."' , '".$cve_respuesta_caminar."', '".$cve_reactivo_caminar."')";
      
                  $result_insert_res1 = odbc_exec($connection,$sql_insert_res1) or die (odbc_errormsg());
      
                  //Registro respuesta 2
                  $sql_insert_res2 = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
                  VALUES('".$cve_persona."' , '".$cve_pregunta."' , '".$cve_seccion."' , '".$cve_respuesta_oir."', '".$cve_reactivo_oir."')";
      
                  $result_insert_res2 = odbc_exec($connection,$sql_insert_res2) or die (odbc_errormsg());
                  
                   //Registro respuesta 3
                  $sql_insert_res3 = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
                  VALUES('".$cve_persona."' , '".$cve_pregunta."' , '".$cve_seccion."' , '".$cve_respuesta_ver."', '".$cve_reactivo_ver."')";
      
                  $result_insert_res3 = odbc_exec($connection,$sql_insert_res3) or die (odbc_errormsg());
      
                   //Registro respuesta 4
                  $sql_insert_res4 = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
                  VALUES('".$cve_persona."' , '".$cve_pregunta."' , '".$cve_seccion."' , '".$cve_respuesta_conducta."', '".$cve_reactivo_conducta."')";
      
                  $result_insert_res4 = odbc_exec($connection,$sql_insert_res4) or die (odbc_errormsg());
      
                   //Registro respuesta 5
                  $sql_insert_res5 = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
                  VALUES('".$cve_persona."' , '".$cve_pregunta."' , '".$cve_seccion."' , '".$cve_respuesta_estres."', '".$cve_reactivo_estres."')";
      
                  $result_insert_res5 = odbc_exec($connection,$sql_insert_res5) or die (odbc_errormsg());
      
                   //Registro respuesta 6
                  $sql_insert_res6 = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
                  VALUES('".$cve_persona."' , '".$cve_pregunta."' , '".$cve_seccion."' , '".$cve_respuesta_agredir."', '".$cve_reactivo_agredir."')";
      
                  $result_insert_res6 = odbc_exec($connection,$sql_insert_res6) or die (odbc_errormsg());
      
                   //Registro respuesta 7
                  $sql_insert_res7 = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
                  VALUES('".$cve_persona."' , '".$cve_pregunta."' , '".$cve_seccion."' , '".$cve_respuesta_depre."', '".$cve_reactivo_depre."')";
      
                  $result_insert_res7 = odbc_exec($connection,$sql_insert_res7) or die (odbc_errormsg());
      
                   //Registro respuesta 8
                  $sql_insert_res8 = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
                  VALUES('".$cve_persona."' , '".$cve_pregunta."' , '".$cve_seccion."' , '".$cve_respuesta_aten."', '".$cve_reactivo_aten."')";
      
                  $result_insert_res8 = odbc_exec($connection,$sql_insert_res8) or die (odbc_errormsg());
      
                   //Registro respuesta 9
                  $sql_insert_res9 = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
                  VALUES('".$cve_persona."' , '".$cve_pregunta."' , '".$cve_seccion."' , '".$cve_respuesta_obesidad."', '".$cve_reactivo_obesidad."')";
      
                  $result_insert_res9 = odbc_exec($connection,$sql_insert_res9) or die (odbc_errormsg());
      
                   //Registro respuesta 9
                  $sql_insert_res10 = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
                  VALUES('".$cve_persona."' , '".$cve_pregunta."' , '".$cve_seccion."' , '".$cve_respuesta_bulimia."', '".$cve_reactivo_bulimia."')";
      
                  $result_insert_res10 = odbc_exec($connection,$sql_insert_res10) or die (odbc_errormsg());
      
      
                  $sql_insert_lengua_ma = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_reactivo,cve_lengua)
                VALUES('".$cve_persona."', '".$cve_pregunta2."', '".$cve_seccion."', '".$cve_reactivo_madre."', '".$cve_lengua_madre."')";

                $result_lengua_ma = odbc_exec($connection,$sql_insert_lengua_ma) or die (odbc_errormsg());

                $sql_insert_lengua_pa = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_reactivo,cve_lengua)
                VALUES('".$cve_persona."', '".$cve_pregunta2."', '".$cve_seccion."', '".$cve_reactivo_padre."', '".$cve_lengua_padre."')";

                $result_lengua_pa = odbc_exec($connection,$sql_insert_lengua_pa) or die (odbc_errormsg());

                echo "Guardado";

        }


    }catch(Exception $e){

        echo('Error al insertar datos generales: ' . $e->GetMessage());
    }


?>