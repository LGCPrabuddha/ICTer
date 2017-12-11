<style type="text/css">
.main{
  border:2px solid black;
  border-radius: 10px;
  padding: 1%;
  margin:1%;
  width:90%;
  height:auto;
  display:block;

}
</style>


<?php
include("inc1/connection.php");
session_start();
date_default_timezone_set('Asia/Colombo');
function create_date(){
    return date('Y-m-d');
}
$date_now=create_date();
$my_user=$_SESSION['name'];
  $dquery=$_POST['date_que'];
  
  if($date_now < $dquery){
    echo "<div class='main'>Sorry Earth hasn't still reached that date</div>";
  }
  else{

  $query="SELECT * FROM message WHERE user='$my_user' AND date_now='$dquery'";
  $result=mysqli_query($connection,$query);
  if(mysqli_num_rows($result) > 0){
    while($row=mysqli_fetch_assoc($result)){
      echo "<div class='main'>".$row['message']."<br>";
      echo $row['date_now']."      Time: ".$row['time_now']."</div>";
    }
  }else{
    echo "<div class='main'>You didn't send any message that day</div>";
  }
}
?>
