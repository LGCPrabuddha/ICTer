<?php
include ('connection.php');
session_start();
$my_user=$_SESSION['user'];
$sql3="SELECT name FROM login WHERE status='1' AND name != '$my_user'";
$result=mysqli_query($link,$sql3);

while($row = mysqli_fetch_array($result)){
	$Users[] = $row['name'];
}

foreach($Users as $links){	
	echo "<a id='user_list' href = set_users.php?".$links."> ".$links."</a>";
	echo "<br>";
}
?>