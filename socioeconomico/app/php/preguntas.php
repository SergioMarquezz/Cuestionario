
<?php


    
    require("../conexion/conexion.php");
    
    $sql = "SELECT * FROM sitemas.preguntas";
    $result = odbc_exec($connection, $sql) or die (odbc_errormsg());

    $result_array_pre = array();   
    
    

    if($result){

        while ($row = odbc_fetch_array($result)){
            //se almacenan los resultados de la consulta en un arreglo
            $result_array_pre[] = $row;
        }

        //El arreglo que guarda los resultados de la BD se convierte a JSON
      // $json = json_encode($result_array, JSON_UNESCAPED_UNICODE);

      // echo($json);

      // print_r($result_array_pre);
       
    }
  
    else{

        die("Error " . odbc_errormsg($result));
    }
    
   
?>

