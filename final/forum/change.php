<?php
include('inc1/connection.php');
session_start();

$my_user=$_SESSION['name'];
$change=$_POST['notified'];
if($change=='Done'){
  $query="UPDATE chat SET c_notify='0' WHERE name='$my_user'";
  mysqli_query($connection,$query);

}

 ?>
