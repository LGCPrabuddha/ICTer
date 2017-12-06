<?php 

$server = 'localhost';
$user = 'root';
$password = '';
$name='trial';

$db_connection=mysqli_connect($server,$user,$password,$name);

if (mysqli_connect_errno()) {
	die('Database connection failed '.mysqli_connect_error()	);
}else{
	//echo "Connection successful";
}

 ?>