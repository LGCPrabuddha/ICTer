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
$my_user=$_SESSION['user_name'];
$quat="SELECT commity FROM namelist WHERE name='$my_user'";
    $sear=mysqli_fetch_assoc(mysqli_query($connection,$quat));
$man=$sear['commity'];
$sql3="SELECT * FROM namelist WHERE status='1' AND name != '$my_user' AND commity='$man'";
$result=mysqli_query($connection,$sql3);

while($row = mysqli_fetch_array($result)){
	echo "<br><span class='user'>".$row['name']."</span>";
	echo "<hr>";
}


?>
