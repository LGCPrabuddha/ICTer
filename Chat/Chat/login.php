<?php
include ('connection.php');
session_start();

if(isset($_POST['login'])){
	$name=$_POST['name'];
	$_SESSION['user']=$name; 
	$myuser=$_SESSION['user'];
	$password=$_POST['password'];
	$sql1="SELECT * FROM login WHERE name='$name' and password='$password'" ;
	$sql2="UPDATE login SET status='1' WHERE name='$myuser'";
	if(mysqli_query($link,$sql1)){
		header ('location:home.php');
	}else{
		echo "Type proper password and name";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
<form method="POST" action="login.php">
	<input type="text" name="name"><br>
	<input type="password" name="password"><br>
	<input type="submit" name="login"><br>
</form>
</body>
</html>