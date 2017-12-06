<style type="text/css">
	.online_user{
		text-decoration: none;
		font-weight: 500;
		color: yellow;
	}
</style>

<?php
require("Connecting_DB.php");
session_start();

$my_username = $_SESSION['my_username'];
														//selectiong online users without the current user
$online = "SELECT Username1 FROM chat_info WHERE Status = 1 AND Username1 != '$my_username'";

if(!mysqli_query($link, $online)){
	die("Failed to fetch online users : ".mysqli_error());
}

$res = mysqli_query($link, $online);

while($row = mysqli_fetch_array($res)){
	$Users[] = $row['Username1'];
}

foreach($Users as $links){	
	echo "<a class='online_user' href = Set_Users.php?".$links."> ".$links."</a>";
	echo "<br>";
}
?>
