<?php
include ('connection.php');
session_start();
//Sending Message
date_default_timezone_set('Asia/Colombo');
function create_date(){
    return date('Y-m-d');
}
function create_time(){
    return date('h:iA');
}			
if(isset($_POST['send'])){
	$message=$_POST['message'];
	$my_user=$_SESSION['user'];
    $date_now=create_date();
    $time_now=create_time();
	$qua="SELECT commity FROM namelist WHERE name='$my_user'";
    $search=mysqli_query($link,$qua);
    while ($mal=mysqli_fetch_array($search)) {
        $comm=$mal['commity'];
        # code...
    }
    
    $Message=htmlentities($message, ENT_QUOTES, "ISO-8859-1");
    $send_data="INSERT INTO message(comm,user,message,date_now,time_now) VALUES('$comm','$my_user','$Message','$date_now','$time_now')";
    if(!mysqli_query($link,$send_data)){
    	die("Failed to send data to database".mysqli_error($link));
    }
    
}
header("location:Home_UI.php");
?>