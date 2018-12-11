<?php
	
	$host = "localhost";
	$user = "root";
	$pass = "123";
	$db  = "adressbook";

	//connection
	
	$connc = new mysqli($host, $user, $pass, $db);

	//Check whether connected or failed;
	
	if($connc -> error){
		die("Fail to connect with database.");
	} 

	else{
		echo "You are ready to go.";
	}

?>