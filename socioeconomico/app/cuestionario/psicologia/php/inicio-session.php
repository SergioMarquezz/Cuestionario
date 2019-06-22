<?php

    session_start();

    require_once("../../../conexion/conexion.php");

    $correo = $_POST['correo-psicologa'];
    $password = $_POST['contrasenia-psicologa'];


    try{

    
        inicioPsicolga();
        
       
    }catch(Exception $e){

        die('Error en la consulta: ' . $e->GetMessage());
    }


function inicioPsicolga(){

    global $correo, $password, $connection;

    $sql_psicologa = "SELECT * 
    FROM saiiut.saiiut.personas
    INNER JOIN sitemas.acceso ON saiiut.saiiut.personas.cve_persona = sitemas.acceso.cve_persona
    WHERE sitemas.acceso.correo = '$correo' AND sitemas.acceso.contrasenia = '$password'";
    
    $result_psicologa = odbc_exec($connection,$sql_psicologa) or die (odbc_errormsg());
    
    $count_psicologa = odbc_num_rows($result_psicologa);

    if($result_psicologa){

        while($row = odbc_fetch_array($result_psicologa)){

            $_SESSION['nombre_user'] = $row["nombre"];            
            $_SESSION['paterno'] = $row["apellido_pat"];
            $_SESSION['materno'] = $row["apellido_mat"];

            if($count_psicologa == 1){

                echo "Psicologa";
            }
            
        } 
       
    }
    else{
        echo "error de sesion";
    }
}

?>