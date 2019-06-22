<?php

    session_start();

    require_once("../conexion/conexion.php");

    $correo = $_POST['correo'];
    $password = $_POST['contrasenia'];

    try{

    

        inicioAspirante();
       // inicioAlumnoMedico();

       
    }catch(Exception $e){

        die('Error en la consulta: ' . $e->GetMessage());
    }

//Inicio de session para los aspirantes que estan el el ultimo proceso
function inicioAspirante(){

    //Se hacen gloables las varibales para poder haceder a ellas desde la funcion
    global $correo, $password, $connection;

    $sql_aspirante = "SELECT * FROM saiiut.saiiut.registro_inicial
    INNER JOIN saiiut.saiiut.procesos ON saiiut.saiiut.registro_inicial.cve_proceso = saiiut.saiiut.procesos.cve_proceso
    WHERE saiiut.saiiut.registro_inicial.cve_proceso = saiiut.saiiut.procesos.cve_proceso 
    AND saiiut.saiiut.registro_inicial.correo = '$correo' AND saiiut.saiiut.registro_inicial.password = '$password'";

    $result_aspirante = odbc_exec($connection,$sql_aspirante) or die (odbc_errormsg());
    
    $count_aspirante = odbc_num_rows($result_aspirante); //Retorna el numero de columnas econtradas
    $cve_aspirante = odbc_result($result_aspirante,"cve_aspirante");
    $consecutivo_aspirante = odbc_result($result_aspirante,"consecutivo_aspirante");

    if($count_aspirante == 1){
            
          echo "Aceptado";
          $_SESSION['clave_aspirante'] = $cve_aspirante;
          $_SESSION['user'] = utf8_encode(odbc_result($result_aspirante, "nombre"));
          $_SESSION['pa'] = utf8_encode(odbc_result($result_aspirante, "apellido_pat"));
          $_SESSION['ma'] = utf8_encode(odbc_result($result_aspirante, "apellido_mat"));
          $_SESSION['consecutivo'] = $consecutivo_aspirante;
          $_SESSION['aceptar'] = 'Aceptado';
      }
}


/*function inicioAlumnoMedico(){

    global $correo, $password, $connection;
    $sql_user = "SELECT * FROM saiiut.usuarios WHERE login_usuario ='$correo' AND contrasena2 ='$password' AND activo = '1'";
    $result_user = odbc_exec($connection,$sql_user) or die (odbc_errormsg());

    $count_user = odbc_num_rows($result_user); //Retorna el numero de columnas econtradas


    $persona_cve = odbc_result($result_user,"cve_persona"); //Se asigna el valor de la clave persona en una variable
    $matricula_user = odbc_result($result_user,"login_usuario"); //Se asigna el valor de la matricula del alumno en una variable
    


    $sql_personas = "SELECT * FROM saiiut.personas WHERE cve_persona = '$persona_cve'";
    $result_personas = odbc_exec($connection,$sql_personas) or die (odbc_errormsg());

    $count_personas = odbc_num_rows($result_personas);

    $tipo_persona = odbc_result($result_personas, "cve_tipo_persona");

    $sexo_persona = odbc_result($result_personas,"sexo");

     
    if($count_user == 1 && $tipo_persona == 2){

        echo "Alumno";
        $_SESSION['user'] = utf8_encode(odbc_result($result_personas, "nombre"));
        $_SESSION['clave_aspirante'] = $persona_cve;
        $_SESSION['sexo'] = $sexo_persona;
    }


    else if($count_user == 1 && $tipo_persona == 8){
            
        $_SESSION['users'] = utf8_encode(odbc_result($result_personas, "nombre"));
        echo "Medico";

    }


}*/


?>