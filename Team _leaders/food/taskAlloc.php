<?php session_start(); ?>
<?php require_once('inc1/connection.php'); ?>
<?php 

  


  
  $v1 = '';
  $v2 = '';
  $v3 = '';
  $v4 = '';
  $v5 = '';
  $v6 = '';
  $rowcount = '';
  $st = '';
  $as = '';




  if (isset($_POST['submit'])) {
      // checking required fields



    $sql="SELECT * FROM tfood";
    $result1 = mysqli_query($connection,$sql);
    $rowcount=mysqli_num_rows($result1);
    $st = $rowcount +1;
    $as = "<input type=\"hidden\" name=\"id\" value = " .$st.">" ;

    //$te = $rowcount +1 ;
    $v1 = $_POST['v1'];
    $v2 = $_POST['v2'];
    $v3 = $_POST['v3'];
    $v4 = $_POST['v4'];
    $v5 = $_POST['v5'];
    $v6 = "<form method=\"POST\" action=\"myTask.php\">".$as." <button type=\"submit\" name=\"fsubmit\" class=\"btn btn-success submit\" style=\"margin-top: 5px; font-size: 10px;\">Complet</button></form>";


    

      /*$query1 = "SELECT COUNT(id) FROM thotel";
      $result1 = mysqli_query($connection,$query1);*/

      /*$result=mysql_query("SELECT count(*) as total from thotel");
      $data=mysql_fetch_assoc($result);
      echo $data['total'];
*/
      /*$rowcount = '';
      $sql="SELECT * FROM thotel";
      $result1 = mysqli_query($connection,$sql);
      $rowcount=mysqli_num_rows($result1)
      ++$rowcount;*/

      // no errors found... adding new record
      $v1 = mysqli_real_escape_string($connection,$_POST['v1']);
      $v2 = mysqli_real_escape_string($connection,$_POST['v2']);
      $v3 = mysqli_real_escape_string($connection,$_POST['v3']);
      $v4 = mysqli_real_escape_string($connection,$_POST['v4']);
      $v5 = mysqli_real_escape_string($connection,$_POST['v5']);
      //$v6 = mysqli_real_escape_string($connection,$_POST['v6']);


     
      $query = "INSERT INTO tfood (";
      $query .= "lindex, task, assdate, enddate, uindex, done, situation, is_deleted";
      $query .= ") VALUE (";
      $query .= "{$v1},'{$v2}',  '{$v3}', '{$v4}', '{$v5}', '{$v6}', 'Not Complet', 0";
      $query .= ")";

      

      $result = mysqli_query($connection,$query);

      if ($result) {
        // query successfull.... redireting to modify-admin page
        header('Location:tastAlloc.php?admin_added=true');

      }else{
        echo "error";
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
    <link rel="stylesheet" href="css/main1.css">
  </head>

  <body class="login">
    <div>
      

      <div >
        <div class="animate form login_form">
          <section class="login_content">
            <form method="POST" action="taskAlloc.php">
              <h1>Signup User</h1>
              
              
              <main>
                <form action="taskAlloc.php" method="post" class="userform">
                  
                  
                  <p>
                    <label for="" class="enter_d" style="margin-left: 60px;">Index:</label>
                    <input type="text" name="v1" placeholder="Event Year" style="width: 20%; margin-left: 20px; height: 30px; font-size: 18px;" <?php echo 'value="' .$v1. '"'; ?>>
                  </p>

                  <p>
                    <label for="" class="enter_d" style="margin-left: 112px;">Task:</label>
                    <input type="text" name="v2" placeholder="Enter the task" style="width: 20%; margin-left: 20px; height: 30px; font-size: 18px;" <?php echo 'value="' .$v2. '"'; ?>>
                  </p>

                  <p>
                    <label for="" class="enter_d" style="margin-left: 60px;">Assign date</label>
                    <input type="text" name="v3" value="<?php echo date("Y/m/d") ?>" style="width: 20%; margin-left: 20px; height: 30px; font-size: 18px;" <?php echo 'value="' .$v3. '"'; ?>>
                  </p>
                  <p>
                    <label for="" class="enter_d" style="margin-left: 60px;">End date:</label>
                    <input type="date" name="v4" value="<?php echo date("Y/m/d") ?>" style="width: 20%; margin-left: 20px; height: 30px; font-size: 18px;" <?php echo 'value="' .$v4. '"'; ?>>
                  </p>


                  <p>
                    <label for="" class="enter_d" style="margin-left: 60px;">User ID:</label>
                    <input type="text" name="v5" placeholder="User name" style="width: 20%; margin-left: 20px; height: 30px; font-size: 18px;" <?php echo 'value="' .$v5. '"'; ?>>
                  </p>

                  
                  
                  <p>20<?php echo date("y/m/d"); ?></p>
                  <?php $rowcount = '';
                        $sql="SELECT * FROM tfood";
                        $result1 = mysqli_query($connection,$sql);
                        $rowcount=mysqli_num_rows($result1);

                        echo $rowcount;
                         ?>
                  
                  

                  
                  
                  <div>
                  <p>
                    <label for="">&nbsp;</label>
                    <button type="submit" name="submit" class="btn btn-success submit" style="margin-top: 40px; font-size: 10px;"> 
                     save</button>
                  </p>
                  </div>

                   

                  <!-- <button class="button">Click Me</button> -->

                </form>

              </main>


              <div class="clearfix"></div>

              <div class="separator">
                

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

        <!-- <button type="submit" name="fsubmit" class="btn btn-success submit" style="margin-top: 5px; font-size: 10px;">Finish</button> -->

      </div>
    </div>
  </body>
</html>