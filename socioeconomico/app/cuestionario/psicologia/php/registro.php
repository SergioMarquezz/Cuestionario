<?php

    require_once("../../../conexion/conexion.php");

    $email = $_POST['psicologa-correo'];
    $pass = $_POST['psicologa-pass'];
    $cve_persona = $_POST['cve_persona'];
    $opcion = $_POST['opcion'];

    if($opcion == "Consulta"){

        $sql_registro = "SELECT * 
        FROM saiiut.saiiut.personas
        INNER JOIN saiiut.saiiut.usuarios ON saiiut.saiiut.personas.cve_persona = saiiut.saiiut.usuarios.cve_persona
        WHERE saiiut.saiiut.usuarios.correo = '$email'";
    
        $result_registro = odbc_exec($connection,$sql_registro) or die (odbc_errormsg());
    
    
        if($result_registro){
    
            while($rows = odbc_fetch_array($result_registro)){
    
                $array_registro["data"][] = array_map("utf8_encode", $rows);    
            }
    
            $json_registro = json_encode($array_registro);
            
            echo $json_registro;
             
        }

    }


    else if($opcion == "Guardar"){

        try{
            $insert_registro = "INSERT INTO sitemas.acceso (correo, contrasenia,cve_persona)
            VALUES ('".$email."', '".$pass."', '".$cve_persona."')";
    
            $result_insert_registro = odbc_exec($connection,$insert_registro) or die (odbc_errormsg());
    
            echo "Registrado";

        }catch(Exception $e){

            echo('Error al insertar datos generales: ' . $e->GetMessage());

        }
       
    }


?>