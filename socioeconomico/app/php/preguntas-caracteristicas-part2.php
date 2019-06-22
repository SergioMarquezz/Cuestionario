<?php

    require("../conexion/conexion.php");

    $cve_persona = $_POST['clave_aspi'];
    $cve_seccion = $_POST['seccion-caracteristicas'];

    $cve_pregunta14 = $_POST['pregunta-14'];
    $cve_pregunta15 = $_POST['pregunta-15'];
    $cve_pregunta16 = $_POST['pregunta-16'];

    /*Reactivos pregunta 14 */
    $cve_reactivo_exito = $_POST['rea-exito'];
    $cve_reactivo_maestros = $_POST ['rea-maestros'];
    $cve_reactivo_familia = $_POST['rea-familia'];
    $cve_reactivo_cambiar = $_POST['rea-cambiar'];
    $cve_reactivo_depende_mi = $_POST ['rea-depende-mi'];
    $cve_reactivo_propongo = $_POST['rea-propongo'];
    $cve_reactivo_calificaciones = $_POST ['rea-calificaciones'];

    /*Reactivos pregunta 15 */
    $cve_reactivo_desaniman = $_POST['rea-desaniman'];
    $cve_reactivo_empiezo = $_POST ['rea-empiezo'];
    $cve_reactivo_esfuerza = $_POST['rea-esfuerza'];
    $cve_reactivo_metas = $_POST['rea-metas'];
    $cve_reactivo_esmera = $_POST ['rea-esmera'];
    $cve_reactivo_trabaja = $_POST['rea-trabaja'];
    $cve_reactivo_obstaculos = $_POST ['rea-obstaculos'];

    /*Reactivos pregunta 16 */
    $cve_reactivo_digna = $_POST['rea-digna'];
    $cve_reactivo_fracasado = $_POST ['rea-fracasado'];
    $cve_reactivo_orgulloso = $_POST['rea-orgulloso'];
    $cve_reactivo_satisfecho = $_POST['rea-satisfecho'];
    $cve_reactivo_inutil = $_POST ['rea-inutil'];
    $cve_reactivo_cualidades = $_POST['rea-cualidades'];
    $cve_reactivo_capaz = $_POST ['rea-capaz'];
    $cve_reactivo_actitud = $_POST ['rea-actitud'];
    $cve_reactivo_valorarme = $_POST ['rea-valorarme'];
    $cve_reactivo_bueno = $_POST ['rea-bueno'];


    /*Respuestas de pregunta 14 */
    $cve_res_exito = $_POST['exito'];
    $cve_res_maestros = $_POST['maestros'];
    $cve_res_familia = $_POST['familia'];
    $cve_res_cambiar = $_POST['cambiar'];
    $cve_res_depende_mi = $_POST['depende-mi'];
    $cve_res_propongo = $_POST['propongo'];
    $cve_res_calificaciones = $_POST['calificaciones'];

    /*Respuestas de pregunta 15 */
    $cve_res_desaniman = $_POST['desaniman'];
    $cve_res_empiezo = $_POST['empiezo'];
    $cve_res_esfuerza = $_POST['esfuerza'];
    $cve_res_metas = $_POST['metas'];
    $cve_res_esmera = $_POST['esmera'];
    $cve_res_trabaja = $_POST['trabaja'];
    $cve_res_obstaculos = $_POST['obstaculos'];

     /*Respuestas de pregunta 16 */
     $cve_res_digna = $_POST['digna'];
     $cve_res_fracasado = $_POST['fracasado'];
     $cve_res_orgulloso = $_POST['orgulloso'];
     $cve_res_satisfecho = $_POST['satisfecho'];
     $cve_res_inutil = $_POST['inutil'];
     $cve_res_cualidades = $_POST['cualidades'];
     $cve_res_capaz = $_POST['capaz'];
     $cve_res_actitud = $_POST['actitud'];
     $cve_res_valorarme = $_POST['valorarme'];
     $cve_res_bueno = $_POST['bueno'];


     try{

        //Insertar respuestas pregunta 14
        $sql_insert_exito = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
        VALUES('".$cve_persona."' , '".$cve_pregunta14."' , '".$cve_seccion."' , '".$cve_res_exito."', '".$cve_reactivo_exito."')";

        $result_insert_exito = odbc_exec($connection,$sql_insert_exito) or die (odbc_errormsg());

        $sql_insert_maestros = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
        VALUES('".$cve_persona."' , '".$cve_pregunta14."' , '".$cve_seccion."' , '".$cve_res_maestros."', '".$cve_reactivo_maestros."')";

        $result_insert_maestros = odbc_exec($connection,$sql_insert_maestros) or die (odbc_errormsg());

        $sql_insert_familia = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
        VALUES('".$cve_persona."' , '".$cve_pregunta14."' , '".$cve_seccion."' , '".$cve_res_familia."', '".$cve_reactivo_familia."')";

        $result_insert_familia = odbc_exec($connection,$sql_insert_familia) or die (odbc_errormsg());

        $sql_insert_cambiar = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
        VALUES('".$cve_persona."' , '".$cve_pregunta14."' , '".$cve_seccion."' , '".$cve_res_cambiar."', '".$cve_reactivo_cambiar."')";

        $result_insert_cambiar = odbc_exec($connection,$sql_insert_cambiar) or die (odbc_errormsg());

        $sql_insert_depende = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
        VALUES('".$cve_persona."' , '".$cve_pregunta14."' , '".$cve_seccion."' , '".$cve_res_depende_mi."', '".$cve_reactivo_depende_mi."')";

        $result_insert_depende = odbc_exec($connection,$sql_insert_depende) or die (odbc_errormsg());

        $sql_insert_propongo = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
        VALUES('".$cve_persona."' , '".$cve_pregunta14."' , '".$cve_seccion."' , '".$cve_res_propongo."', '".$cve_reactivo_propongo."')";

        $result_insert_propongo = odbc_exec($connection,$sql_insert_propongo) or die (odbc_errormsg());

        $sql_insert_calificaciones = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
        VALUES('".$cve_persona."' , '".$cve_pregunta14."' , '".$cve_seccion."' , '".$cve_res_calificaciones."', '".$cve_reactivo_calificaciones."')";

        $result_insert_calificaciones = odbc_exec($connection,$sql_insert_calificaciones) or die (odbc_errormsg());


        //Insertar respuestas pregunta 15
        $sql_insert_desaniman = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
        VALUES('".$cve_persona."' , '".$cve_pregunta15."' , '".$cve_seccion."' , '".$cve_res_desaniman."', '".$cve_reactivo_desaniman."')";

        $result_insert_desaniman = odbc_exec($connection,$sql_insert_desaniman) or die (odbc_errormsg());

        $sql_insert_empiezo = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
        VALUES('".$cve_persona."' , '".$cve_pregunta15."' , '".$cve_seccion."' , '".$cve_res_empiezo."', '".$cve_reactivo_empiezo."')";

        $result_insert_empiezo = odbc_exec($connection,$sql_insert_empiezo) or die (odbc_errormsg());

        $sql_insert_esfuerza = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
        VALUES('".$cve_persona."' , '".$cve_pregunta15."' , '".$cve_seccion."' , '".$cve_res_esfuerza."', '".$cve_reactivo_esfuerza."')";

        $result_insert_esfuerza = odbc_exec($connection,$sql_insert_esfuerza) or die (odbc_errormsg());

        $sql_insert_metas = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
        VALUES('".$cve_persona."' , '".$cve_pregunta15."' , '".$cve_seccion."' , '".$cve_res_metas."', '".$cve_reactivo_metas."')";

        $result_insert_metas = odbc_exec($connection,$sql_insert_metas) or die (odbc_errormsg());

        $sql_insert_esmera = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
        VALUES('".$cve_persona."' , '".$cve_pregunta15."' , '".$cve_seccion."' , '".$cve_res_esmera."', '".$cve_reactivo_esmera."')";

        $result_insert_esmera = odbc_exec($connection,$sql_insert_esmera) or die (odbc_errormsg());

        $sql_insert_trabaja = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
        VALUES('".$cve_persona."' , '".$cve_pregunta15."' , '".$cve_seccion."' , '".$cve_res_trabaja."', '".$cve_reactivo_trabaja."')";

        $result_insert_trabaja = odbc_exec($connection,$sql_insert_trabaja) or die (odbc_errormsg());

        $sql_insert_obstaculos = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
        VALUES('".$cve_persona."' , '".$cve_pregunta15."' , '".$cve_seccion."' , '".$cve_res_obstaculos."', '".$cve_reactivo_obstaculos."')";

        $result_insert_obstaculos = odbc_exec($connection,$sql_insert_obstaculos) or die (odbc_errormsg());


        //Insertar respuestas pregunta 16
        $sql_insert_digna = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
        VALUES('".$cve_persona."' , '".$cve_pregunta16."' , '".$cve_seccion."' , '".$cve_res_digna."', '".$cve_reactivo_digna."')";

        $result_insert_digna = odbc_exec($connection,$sql_insert_digna) or die (odbc_errormsg());

        $sql_insert_fracasado = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
        VALUES('".$cve_persona."' , '".$cve_pregunta16."' , '".$cve_seccion."' , '".$cve_res_fracasado."', '".$cve_reactivo_fracasado."')";

        $result_insert_fracasado = odbc_exec($connection,$sql_insert_fracasado) or die (odbc_errormsg());

        $sql_insert_orgulloso = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
        VALUES('".$cve_persona."' , '".$cve_pregunta16."' , '".$cve_seccion."' , '".$cve_res_orgulloso."', '".$cve_reactivo_orgulloso."')";

        $result_insert_orgulloso = odbc_exec($connection,$sql_insert_orgulloso) or die (odbc_errormsg());

        $sql_insert_satisfecho = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
        VALUES('".$cve_persona."' , '".$cve_pregunta16."' , '".$cve_seccion."' , '".$cve_res_satisfecho."', '".$cve_reactivo_satisfecho."')";

        $result_insert_satisfecho = odbc_exec($connection,$sql_insert_satisfecho) or die (odbc_errormsg());

        $sql_insert_inutil = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
        VALUES('".$cve_persona."' , '".$cve_pregunta16."' , '".$cve_seccion."' , '".$cve_res_inutil."', '".$cve_reactivo_inutil."')";

        $result_insert_inutil = odbc_exec($connection,$sql_insert_inutil) or die (odbc_errormsg());

        $sql_insert_cualidades = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
        VALUES('".$cve_persona."' , '".$cve_pregunta16."' , '".$cve_seccion."' , '".$cve_res_cualidades."', '".$cve_reactivo_cualidades."')";

        $result_insert_cualidades = odbc_exec($connection,$sql_insert_cualidades) or die (odbc_errormsg());

        $sql_insert_capaz = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
        VALUES('".$cve_persona."' , '".$cve_pregunta16."' , '".$cve_seccion."' , '".$cve_res_capaz."', '".$cve_reactivo_capaz."')";

        $result_insert_capaz = odbc_exec($connection,$sql_insert_capaz) or die (odbc_errormsg());

        $sql_insert_actitud = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
        VALUES('".$cve_persona."' , '".$cve_pregunta16."' , '".$cve_seccion."' , '".$cve_res_actitud."', '".$cve_reactivo_actitud."')";

        $result_insert_actitud = odbc_exec($connection,$sql_insert_actitud) or die (odbc_errormsg());

        $sql_insert_valorarme = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
        VALUES('".$cve_persona."' , '".$cve_pregunta16."' , '".$cve_seccion."' , '".$cve_res_valorarme."', '".$cve_reactivo_valorarme."')";

        $result_insert_valorarme = odbc_exec($connection,$sql_insert_valorarme) or die (odbc_errormsg());

        $sql_insert_bueno = "INSERT INTO sitemas.detalle_preguntas(cve_persona,cve_pregunta,cve_seccion,cve_respuesta,cve_reactivo) 
        VALUES('".$cve_persona."' , '".$cve_pregunta16."' , '".$cve_seccion."' , '".$cve_res_bueno."', '".$cve_reactivo_bueno."')";

        $result_insert_bueno = odbc_exec($connection,$sql_insert_bueno) or die (odbc_errormsg());

        echo "Guardado";


     }catch(Exception $e){

        echo('Error al insertar caracteristicas 2: ' . $e->GetMessage());
     }
?>