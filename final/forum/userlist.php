<style type="text/css">
	.user{
		font-weight: bold;
		color:white;
		font-size: 20px;
		padding: 0px;
		text-align: left;
	}
</style>



<?php
include ('inc1/connection.php');
session_start();
$my_user=$_SESSION['name'];

$man=$_SESSION['committee'];
$sql3="SELECT * FROM chat WHERE name != '$my_user' AND team='$man'";
$result=mysqli_query($connection,$sql3);

while($row = mysqli_fetch_array($result)){
	echo "<br><span class='user'>".$row['name']."</span>";
	echo "<hr>";
}


?>
