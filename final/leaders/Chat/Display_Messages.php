<style type="text/css">
	.myMessage{
		background-color:#1FAFFA;
		background-size:contain;
		padding: 2%;
		margin: 1%;
		height:auto;
		width: 55%;
		text-align: center;
		border-radius: 10px;
		overflow-x: auto;
		float: left;
		display:block;
		color:#F5F6CE;
	}
	
	.otherMessage{
		background-color: #6056F2;
		background-size:contain;
		padding: 2%;
		margin: 1%;
		height:auto;
		width: 55%;
		border-radius: 10px;
		text-align: center;
		overflow-x: auto;
		float: right;
		display:block;
		color:#F5F6CE;
	}
</style>

<?php
	//***Displaying messages***
require('connection.php');	
session_start();

$my_username = $_SESSION['user'];
$quat="SELECT commity FROM namelist WHERE name='$my_username'";
    $sear=mysqli_fetch_assoc(mysqli_query($link,$quat));
$man=$sear['commity'];

$get_data="SELECT * FROM message WHERE comm='$man'";
$rolling=mysqli_query($link,$get_data);
while($row=mysqli_fetch_array($rolling)){
	
	$ord_user[] = $row['user'];
	$msg[] = $row['message'];
}

$count=mysqli_num_rows($rolling);

for($i=0;$i<$count;$i++){
	if ($ord_user[$i] == $my_username){
		echo "<br><span class='myMessage'>".$my_username."<br>".$msg[$i]."</span><br>";
	}else{
		echo "<br><span class='otherMessage'>".$ord_user[$i]."<br>".$msg[$i]."</span><br>"; 
	}

}
?>
