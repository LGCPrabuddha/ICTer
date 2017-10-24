<?php


// conference publicity Handling
    $sql1="SELECT * FROM tpublicity";
    if ($result1=mysqli_query($connection,$sql1))
      {
      // Return the number of rows in result set
      $rowcount1=mysqli_num_rows($result1);
      $sql21="SELECT * FROM  tpublicity WHERE done='Finish' AND is_deleted = 0 ";
      if($query21=mysqli_query($connection,$sql21)){
        $result21=mysqli_num_rows($query21);
      }
      //Create the Percentage
      function percentage($a, $b){
        return ($a/$b)*100;
      }
      $percent1=percentage($result21,$rowcount1);
      
      // Free result set
      mysqli_free_result($result1);
      mysqli_free_result($query21);
      }

// conference sponsorship Handling

      $sql2="SELECT * FROM tsponsorship";
      if ($result2=mysqli_query($connection,$sql2))
        {
        // Return the number of rows in result set
        $rowcount2=mysqli_num_rows($result2);
        $sql22="SELECT * FROM tsponsorship WHERE done='Finish' AND is_deleted = 0 ";
        if($query22=mysqli_query($connection,$sql22)){
          $result22=mysqli_num_rows($query22);
        }
        //Create the Percentage
        
        
        $percent2=percentage($result22,$rowcount2);
        
        // Free result set
        mysqli_free_result($result2);
        mysqli_free_result($query22);
        }

 // conference bag prograce
    $sql3="SELECT * FROM tbag";
    if ($result3=mysqli_query($connection,$sql3))
      {
      // Return the number of rows in result set
      $rowcount3=mysqli_num_rows($result3);
      $sql23="SELECT * FROM tbag WHERE done='Finish' AND is_deleted = 0 ";
      if($query23=mysqli_query($connection,$sql23)){
        $result23=mysqli_num_rows($query23);
      }
      //Create the Percentage
      
      
      $percent3=percentage($result23,$rowcount3);
      
      // Free result set
      mysqli_free_result($result3);
      mysqli_free_result($query23);
      }

// conference Refreshment Handling prograce
    $sql4="SELECT * FROM tfood";
    if ($result4=mysqli_query($connection,$sql4))
      {
      // Return the number of rows in result set
      $rowcount4=mysqli_num_rows($result4);
      $sql24="SELECT * FROM tfood WHERE done='Finish' AND is_deleted = 0 ";
      if($query24=mysqli_query($connection,$sql24)){
        $result24=mysqli_num_rows($query24);
      }
      //Create the Percentage
      
      
      $percent4=percentage($result24,$rowcount4);
      
      // Free result set
      mysqli_free_result($result4);
      mysqli_free_result($query24);
      }


   // food prograce 
    $sql7="SELECT * FROM thotel";
    if ($result7=mysqli_query($connection,$sql7))
      {
      // Return the number of rows in result set
      $rowcount7=mysqli_num_rows($result7);
      $sql27="SELECT * FROM thotel WHERE done='Finish' AND is_deleted = 0 ";
      if($query27=mysqli_query($connection,$sql27)){
        $result27=mysqli_num_rows($query27);
      }
      //Create the Percentage
      
      $percent7=percentage($result27,$rowcount7);
      
      // Free result set
      mysqli_free_result($result7);
      mysqli_free_result($query27);
      }


 ?>