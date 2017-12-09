 <?php session_start(); ?>
 <?php require_once('inc1/connection.php'); ?>
 <?php require_once('inc1/functions.php'); ?>
<?php
//check for submission
 if (isset($_POST['submit'])){

  $errors=array();

//check username passwod entered
  if(!isset($_POST['email']) || strlen(trim($_POST['email']))<1){
    $errors[]='username is missing / invalid';
  }

  if(!isset($_POST['password']) || strlen(trim($_POST['password']))<1){
    $errors[]='password is missing / invalid';
  }

//check for errors
if(empty($errors)){
//save user name password to variables
    $email = mysqli_real_escape_string($connection,$_POST['email']);
    $password = mysqli_real_escape_string($connection,$_POST['password']);
    $hashed_password = sha1($password);

//prepare database query
$query="SELECT * FROM main_login
WHERE email='{$email}'
AND password= '{$hashed_password}'";

$result_set = mysqli_query($connection,$query);
//var_dump($result_set);

verify_query($result_set);
  //query success
  if(mysqli_num_rows($result_set)==1){
    //valid user found
    $user= mysqli_fetch_assoc($result_set);
    //var_dump($user);
    $_SESSION['user_id']= $user['id'];
    $_SESSION['name']= $user['fname'];
    $_SESSION['committee']= $user['team'];


   

    $result_set= mysqli_query($connection,$query);

    verify_query($result_set);
      //die("database connection failed");

    if($user['position']=="admin"){
    
    //redirect users.php 
    header('location:Admin/progress.php');
  }
    if($user['position']=="leader"){
      if($user['team']=="food"){
    
    //redirect users.php 
    header('location:leaders/food/hleader.php');
    }

   
      if($user['team']=="review"){
    
    //redirect users.php 
    header('location:review committee/test1.php');
    }
  }
  }else{
    //username password invalid
    $errors[]='invalid username / password';
  }





//if not display error
} 
 }

?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> | ICTer | </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
             <form action="main_login.php" method="post">

              <fieldset>
              <h1>Login</h1>
              <div>

                <?php
if (isset($errors) && !empty($errors)){
  echo '<p class="error"><font size="5" color="red"><b>Invalid username / Password</b></font></p>';
}
?>
<?php
  if (isset($_GET['logout'])){
    echo '<p class="info"><font size="5" color="red"><b>Logout sucessfully!</b></font></p>';
  }

?>
                <input type="email" name="email" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="password" name="password" class="form-control" placeholder="Password" required="" />
              </div>
               <div class="box-footer">
                <button type="submit" name="submit" class="btn btn-primary">Login</button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">
                  <a href="#signup" class="to_register"> </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> ICTer 2017 </h1>
                  <p>©2017 All Rights Reserved. University of Colombo School of Computing</p>
                </div>
              </div>
            </fieldset>
            </form>
          </section>
        </div>

       
      </div>
    </div>
  </body>
</html>
