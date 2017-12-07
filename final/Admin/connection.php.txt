<?php
$connection=mysqli_connect('localhost','root','','group');
if(mysqli_connect_errno()){
	die('database connection is failed'.mysqli_connect_errno());
}
?>