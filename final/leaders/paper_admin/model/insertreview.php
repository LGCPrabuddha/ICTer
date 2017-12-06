<?php
require_once('../inc1/connection.php');

  $errors = array();

  $paper='';
  $review='';
  $status= '';
  $acceptance= ''; 


    $paper= $_POST['paper'];
    $review= $_POST['review'];
    $status= $_POST['status'];
    $acceptance= $_POST['acceptance'];
    $query="INSERT INTO review VALUES($paper,$review,'$status','$acceptance')";
    mysqli_query($connection,$query);
 header('Location: ../admin.php');
    //checking required fields


 



    

  
    
  
  //checking max length
//   $max_length_fields = array('first_name' =>10,'last_name' => 10,'email' => 100,'password' => 40);
// $errors=array_merge($errors,check_max_len($max_length_fields));
  

//checking email is already exist


// $query ="SELECT * FROM user WHERE email='{$email}' LIMIT 1";
// $result_set=mysqli_query($connection,$query);

// if($result_set){
//   if (mysqli_num_rows($result_set)==1){
//     $errors[]='email already exists'; }
// }

/*if(empty($errors)){
  //adding new records

  $paper = mysqli_real_escape_string($connection,$_POST['paper']);
  $review = mysqli_real_escape_string($connection,$_POST['review']);
  // $status = mysqli_real_escape_string($connection,$_POST['status']);
  // $acceptance = mysqli_real_escape_string($connection,$_POST['acceptance']);
  //email already sanitized
  // $hashed_password = sha1($password);
  if($status){

    foreach ($status as $k) {
     

      $query0="INSERT INTO review (paper,reviewer,status,acceptance)VALUES('{$paper}','{$review}','".mysqli_real_escape_string($connection,$k)."','acc')";
     $result=mysqli_query($connection,$query0);
   
    }

 }

  // $query= "INSERT INTO review (paper,reviewer,status,acceptance)VALUES('{$paper}','{$review}','{$status}','{$acceptance}')";

  // $result = mysqli_query($connection,$query);

  if($result){
    //query success redirect to users.php
    header('Location:admin.php?data_added=true ');
  }else{
    $errors[]='Failed to addd new record';
  }


}*/

?>