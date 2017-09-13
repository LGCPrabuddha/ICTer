<?php	
	$host = 'localhost';
	$user = 'root';
	$pass = 'ring';
	$db = 'eventorgo';
	
	$link = mysqli_connect($host, $user, $pass, $db);
	if (mysqli_connect_errno()){
		die("Connection Error : ". mysqli_connect_error());
	}		
?>