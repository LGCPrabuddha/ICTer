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
$my_user=$_SESSION['user_name'];

  $dquery=$_POST['date_que'];
  $query="SELECT * FROM message WHERE user='$my_user' AND date_now='$dquery'";
  $result=mysqli_query($connection,$query);
  if(mysqli_num_rows($result) > 0){
    while($row=mysqli_fetch_assoc($result)){
      echo "<div class='main'>".$row['message']."<br>";
      echo $row['date_now']."      Time: ".$row['time_now']."</div>";
    }
  }

?>
