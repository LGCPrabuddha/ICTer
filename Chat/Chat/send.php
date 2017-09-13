<?php
include ('connection.php');
session_start();
//Sending Message			
if(isset($_POST['send'])){
	$message = $_POST['message'];
	$my_user = $_SESSION['user'];
	$other_user = $_SESSION['other_username'];
	$Message = htmlentities($message, ENT_QUOTES, "ISO-8859-1");//convert chractors to HTML entities to prevent 
	$insert = "INSERT INTO mess(user1, user2, message) VALUES('$my_user', '$other_user', '$Message')";	
	if(!mysqli_query($link, $insert)){
		die("Failed to insert message : ".mysqli_error($link));
	}	
}

header("location:home.php");
?>