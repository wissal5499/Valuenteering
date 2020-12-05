<?php

    $adminuser = 'root';
	$password = ''  ; //To be completed if you have set a password to root
	$database = 'valuenteering'  ; //To be completed to connect to a database. 
    $port = 3308;     //Default must be NULL to use default port
    
	$conn = new mysqli('localhost:3308', $adminuser, $password, $database);

	if ($conn->connect_error) {
		die('Connect Error (' . $conn->connect_errno . ') '. $conn->connect_error);
	}
    
?>