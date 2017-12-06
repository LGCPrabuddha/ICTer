<?php

	$dbhost = 'localhost';
	$dbuser= 'root';
	$dbpass = 'ring';
	$dbname ='group';

	$connection = mysqli_connect('localhost','root','ring','group');

	if (mysqli_connect_errno()){
		die('Database connection failed' . mysqli_connect_error());
	}
	?>
