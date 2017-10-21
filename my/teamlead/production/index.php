<?php session_start(); ?>
<?php require_once('inc1/connection.php'); ?>
<?php 
  //check for form submission
  if (isset($_POST['submit'])) {
    
    $errors = array();
    //check if the username and password has been enterd
    if (!isset($_POST['email']) || strlen(trim($_POST['email']))<1) {
      $errors[] = 'Email is Missing / Invalid';
    }

    if (!isset($_POST['password']) || strlen(trim($_POST['password']))<1) {
      $errors[] = 'Password is Missing / Invalid';
    }

    //check if there are any errors inthe form 
    if (empty($errors)) {
      # code...
      // save username and password into variables
      $email    = mysqli_real_escape_string($connection,$_POST['email']);
      $password = mysqli_real_escape_string($connection,$_POST['password']);
      $hashed_password = sha1($password);
      $table= $_POST['pro_type'];
      $group= $_POST['group'];
      $_SESSION['pro_type'] = $_POST['pro_type'];


      // prepare database query

       $query = "SELECT * FROM login
            WHERE email = '{$email}'
            AND password = '{$hashed_password}'
            AND ugroup = '{$group}'
            /*AND ugroup = '{$group}'*/
            LIMIT 1";

      $query1 = "SELECT * FROM signup
            WHERE email = '{$email}'
            AND password = '{$hashed_password}'
            LIMIT 1";

       $result_set = mysqli_query($connection,$query);
       $result_set1 = mysqli_query($connection,$query1);




       if ($result_set && $result_set1) {
        // query succesfful

        

        if (mysqli_num_rows($result_set) == 1) {
          # code...
          $user = mysqli_fetch_assoc($result_set);
          $user1 = mysqli_fetch_assoc($result_set1);
          $_SESSION['email'] = $user['email'];
          $_SESSION['user_name'] = $user1['user_name'];
          $_SESSION['uindex'] = $user1['uindex'];

          if ($table == "admin") {
            header('Location: admin/index.php');
          
          }elseif($table == "leader") {
            switch ($group) {
              case 'sponsorship':
                header('Location: leader/sponsorship.php');
                break;

              case 'keynote':
                header('Location: leader/keynote.php');
                break;

              case 'publicity':
                header('Location: leader/publicity.php');
                break;

              case 'paper':
                header('Location: leader/paper.php');
                break;

              case 'reviewer':
                header('Location: leader/reviewer.php');
                break;

              case 'hotel':
                header('Location: leader/hotel.php');
                break;

              case 'food':
                header('Location: leader/food.php');
                break;

              case 'bag':
                header('Location: leader/bag.php');
                break;
              
              default:
                # code...
                break;
            }
            # code...
            /*header('Location: hleader.php');*/
          }elseif ($table == "member") {

            switch ($group) {
              case 'sponsorship':
                header('Location: member/sponsorship/sponsorship.php');
                break;

              case 'keynote':
                header('Location: member/keynote/keynote.php');
                break;

              case 'publicity':
                header('Location: member/publicity/publicity.php');
                break;

              case 'paper':
                header('Location: member/paper.php');
                break;

              case 'reviewer':
                header('Location: member/reviewer.php');
                break;

              case 'hotel':
                header('Location: member/hotel/hotel.php');
                break;

              case 'food':
                header('Location: member/food/food.php');
                break;

              case 'bag':
                header('Location: member/bag/bag.php');
                break;
              
              default:
                # code...
                break;
            }
            /*header('Location: member.php');*/
          }
        }


       }else{
        $errors[] = 'Database query faile';
       }
       
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

    <title>User Login</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="https://colorlib.com/polygon/gentelella/css/animate.min.css" rel="stylesheet">

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
            <form method="POST" action="index.php">
              <h1>User Login</h1>

              <?php 
                if (isset($errors) && !empty($errors)) {
                  echo '<p class="error">Invalide User Name or Password</p>';
                 } 
               ?>

              <?php 
                if (isset($_GET['logout'])) {
                  echo '<p Style="color:green;">You have succesfully logged out from the system</p>';
                 } 
               ?>


              <p class="int">
                <label for="" style="font-size: 20px; float: left; margin-bottom: 10px;">I am :</label>   
                <select name="pro_type" style="width: 83%; float: left; height: 30px; font-size: 15px; margin-top: 5px; margin-left: 5px; border: 0px;">
                      <option value="admin">Admin</option>
                      <option value="leader">Group Leader</option>
                      <option value="member">Group Member</option>
                    </select>
              </p>
              <br><br><br>
              <p class="int">
                <label for="" style="font-size: 20px; float: left; margin-left: 0px;  margin-bottom: 10px;">My Group :</label>   
                <select name="group" style="width: 68%; float: left; height: 30px; font-size: 15px; margin-top: 5px; margin-left: 5px; border: 0px;">
                      <option value="sponsorship">Sponsorship</option>
                      <option value="keynote">Keynote</option>
                      <option value="publicity">publicity</option>
                      <option value="paper">Paper</option>
                      <option value="reviewer">Reviewer</option>
                      <option value="hotel">Hotel Quotation</option>
                      <option value="food">Food Quotation</option>
                      <option value="bag">Bag Quotation</option>
                    </select>
              </p>
              <br><br><br>
              <div>
                <input type="email" name="email" class="form-control" placeholder="Email Address" required="" />
              </div>
              <div>
                <input type="password" name="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <input type="submit" class="btn btn-success submit" name="submit" value="Login"> 
                <a class="reset_pass" href="#">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="signup.php" class="to_register"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> ICTER EVENT PLANNER</h1>
                  <p>©2017 All Rights Reserved.By University of Colombo School of Computing</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        
      </div>
    </div>
  </body>
</html>