<?php



	$user = 'sitemas';
	$pass = 'UtecAreaSistemas';
	$server = '200.10.10.3';
	$database = 'socioeconomico';

	$user_saiiut = "saiiut";
	$database_saiiut = "saiiut";
	$pass_saiiut = "Tul@ncingo#2019$";


	/*try{
		$connection_string = "DRIVER={SQL Server};SERVER=$server;DATABASE=$database;stmt=SET NAMES 'utf8';";
		$conn = odbc_connect($connection_string,$user,$pass);
	}catch(Exception $e){
		error_log("Sin internet)", 0);
	}
	if ($conn) {
		//echo("¡La base de datos está disponible! :)");
	}
	else{
		//echo("¡La base de datos no está disponible! :(");
	}*/

	//cadena de conexión
	$connection_saiiut = "Driver={SQL Server}; Server=$server; Database=$database_saiiut; Integrated Security=SSPI;Persist Security Info=False;";
	
	$saiiut = odbc_connect($connection_saiiut, $user_saiiut, $pass_saiiut);

	$connection_socioeconomico = "Driver={SQL Server}; Server=$server; Database=$database; Integrated Security=SSPI;Persist Security Info=False;";

	$connection = odbc_connect($connection_socioeconomico, $user, $pass );


?>