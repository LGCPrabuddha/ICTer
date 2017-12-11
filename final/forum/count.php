<?php
require('inc1/connection.php');
session_start();
$my_user=$_SESSION['name'];
$my_comm=$_SESSION['committee'];
$query1="SELECT c_notify FROM chat WHERE name='$my_user'";
$result1=mysqli_query($connection,$query1);
$row1=mysqli_fetch_assoc($result1);
if($row1['c_notify'] == '1'){
  $query2="SELECT * FROM message WHERE user != '$my_user' AND comm='$my_comm' AND status='1'";
  $result2=mysqli_query($connection,$query2);
  $count=mysqli_num_rows($result2);
  echo json_encode($count);
}


 ?>
