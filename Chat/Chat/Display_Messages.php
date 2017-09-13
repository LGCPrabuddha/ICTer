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
$other_username	= $_SESSION['other_username'];

$extract = "SELECT * FROM mess WHERE (user1 = '$my_username' AND user2 = '$other_username') OR (user2 = '$my_username' AND user1 = '$other_username') ";
if(!mysqli_query($link, $extract)){
	die("Failed to extract messages : ".mysqli_error($link));
}
$all = mysqli_query($link, $extract);
while($row = mysqli_fetch_array($all)){
	$user1[] = $row['user1'];
	$msg[] = $row['message'];
	
}	
$count = mysqli_num_rows($all);

for($i = 0; $i < $count; $i++){
	if($user1[$i] == $my_username){
		echo "<br><span class='myMessage'>".$msg[$i]."</span><br>"; 
		
	}
	elseif($user1[$i] == $other_username){
		echo "<br><span class='otherMessage'>".$msg[$i]."</span><br>"; 
		
	}
}
?>
