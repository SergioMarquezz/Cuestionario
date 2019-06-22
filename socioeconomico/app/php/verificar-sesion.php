<?php

    session_start();

    if(!isset($_SESSION['clave_aspirante'])){
        
        $data['sesion'] = false;
        print json_encode($data);
    }else{
        $data['sesion'] = true;
        print json_encode($data);
    }

?>