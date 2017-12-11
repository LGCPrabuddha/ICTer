<?php
include ('inc1/connection.php');
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
	$my_user=$_SESSION['name'];
    $date_now=create_date();
    $time_now=create_time();
    $comm=$_SESSION['committee'];


    $Message=htmlentities($message, ENT_QUOTES, "ISO-8859-1");
    $send_data="INSERT INTO message(comm,user,message,date_now,time_now,status) VALUES('$comm','$my_user','$Message','$date_now','$time_now','1')";
    if(!mysqli_query($connection,$send_data)){
    	die("Failed to send data to database".mysqli_error($connection));
    }

}
header("location:trick.php");
?>
