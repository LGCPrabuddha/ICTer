<?php
require('inc1/connection.php');
session_start();
$my_user=$_SESSION['user_name'];
$my_comm=$_SESSION['commity'];
$query1="SELECT c_notify FROM user WHERE name='$my_user'";
$result1=mysqli_query($connection,$query1);
$row1=mysqli_fetch_assoc($result1);
if($row1['c_notify'] == '1'){
  $query2="SELECT * FROM message WHERE user != '$my_user' AND comm='$my_comm' AND status='1' LIMIT 4";
  $result2=mysqli_query($connection,$query2);
  while($row2=mysqli_fetch_assoc($result2)){
    echo "<li>
      <a>
        <span class='image'><img src='images/img.jpg' alt='Profile Image' /></span>
        <span>
          <span>".$row2['user']."</span>
          <span class='time'>".$row2['time_now']."</span>
        </span>
        <span class='message'>".
          $row2['message'].
        "</span>
      </a>
    </li>";
  }echo "<li>
    <div class='text-center'>
      <a href='alerts.php'>
        <strong>See All Alerts</strong>
        <i class='fa fa-angle-right'></i>
      </a>
    </div>
  </li>";
}else{
  echo "<li>
    <div class='text-center'>
      <a>
        <strong>No Notification</strong>

      </a>
    </div>
  </li>";

}
$query3="SELECT * FROM user WHERE comt='my_comm' AND c_notify='1'";
$result3=mysqli_query($connection,$query3);
if(mysqli_num_rows($result3) == 0){
  $query4="UPDATE message SET status='0' WHERE comm='$my_comm'";
  $result4=mysqli_query($connection,$query4);
}
 ?>
