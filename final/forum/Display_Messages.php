<style type="text/css">
	.myMessage{
		background-color:#D3D3D3;
		background-size:contain;
		padding: 1%;
		margin: 1%;
		height:auto;
		width: 55%;
		text-align: left;
		border-radius: 10px;
		overflow-x: auto;
		float: left;
		display:block;
		color:black;
	}

	.otherMessage{
		background-color: #778899;
		background-size:contain;
		padding: 1%;
		margin: 1%;
		height:auto;
		width: 55%;
		border-radius: 10px;
		text-align: left;
		overflow-x: auto;
		float: right;
		display:block;
		color:#F5F6CE;
	}
	.datetime{
		background-color: #778899;
		padding: 1%;
		margin:1%;
		width:100%;
		height:auto;
		text-align: center;
		display: block;
		color: black;
		border-radius: 10px;

	}
	span.clear { float:right; display: block; }
</style>

<?php
	//***Displaying messages***
require('inc1/connection.php');
session_start();



$my_username = $_SESSION['name'];

$man=$_SESSION['committee'];

$get_data="SELECT * FROM message WHERE comm='$man'";
$rolling=mysqli_query($connection,$get_data);
while($row=mysqli_fetch_array($rolling)){
	$date_N[] = $row['date_now'];
	$time_N[] = $row['time_now'];
	$ord_user[] = $row['user'];
	$msg[] = $row['message'];
}

$count=mysqli_num_rows($rolling);

for($i=0;$i<$count;$i++){


		if ($ord_user[$i] == $my_username){
		    echo "<br><span class='myMessage'><b>".$my_username."</b><span class='clear'>".$date_N[$i]."</span><br>".$msg[$i]."<span class='clear'>".$time_N[$i]."</span></span><br>";
     	}else{
		    echo "<br><span class='otherMessage'><b>".$ord_user[$i]."</b><span class='clear'>".$date_N[$i]."</span><br>".$msg[$i]."<span class='clear'>".$time_N[$i]."</span></span><br>";
	    }



}
?>
