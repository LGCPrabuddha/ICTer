<?php
include('inc1/connection.php');
session_start();
$my_user=$_SESSION['user_name'];
$change=$_POST['notified'];
if($change=='Done'){
  $query="UPDATE user SET c_notify='0' WHERE name='$my_user'";
  mysqli_query($connection,$query);

}

 ?>
