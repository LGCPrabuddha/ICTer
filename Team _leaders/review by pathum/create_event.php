
<?php require_once('inc1/connection.php'); ?>
<?php 

if(isset($_POST['submit'])) {

  //variable for inserting
    
        $year = $_POST['year'];
        $name = $_POST['name'];
        $chairman = $_POST['chairman'];
        $secretary = $_POST['secretary'];
        $tresurer=$_POST['tresurer'];
        $g_publicity=$_POST['publicity'];
        $g_bag=$_POST['bag'];
        $g_keynote=$_POST['keynote'];
        $g_sponsorship=$_POST['sponsorship'];
        $g_hotel=$_POST['hotel'];
        $g_refreshment=$_POST['refreshment'];
        $g_paper=$_POST['paper'];
        //query

        $query="INSERT INTO event(year,name,chairman,secretary,tresurer) VALUES ({$year},'{$name}','{$chairman}','{$secretary}','{$tresurer}')";
        $result=mysqli_query($connection,$query);

        if ($result) {
          //echo "Successfully saved your record";
        }else{
          echo "Database query failed";
        }

        //query
//loop ekak danna one methanata
        $query="INSERT INTO teamleader(evnt_year,leader_email) VALUES ({$year},{$g_publicity}')";
        $result=mysqli_query($connection,$query);

        if ($result) {
          //echo "Successfully saved your record";
        }else{
          echo "Database query failed";
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

    <title>Create Event</title>

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
    <style type="text/css">
   /* .login_wrapper{
      margin-top: 0px;
    }
    .man{
      padding-bottom:70%;

    } 
    .footerTab {
width: 100%; background-color: black; height: 100px; margin-top: 1000px;
      }*/

/*div.relative {
    position: relative;
    width: 400px;
    height: 200px;
    border: 3px solid #8AC007;
}*/

/*div.absolute {
    position: absolute;
    margin-top:  70px;
    width: 200px;
    height: 100px;
   
} */

    
    </style>
  </head>

  <body class="login">
   
      <!-- <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a> -->

      <div class="login_wrapper" style="min-height: 1200px">
        <div class="">
          <section class="login_content">
            <form method="POST" action="create_event.php">
              <h1>Create Event</h1>              
                <div>
              <div>
                Year <br>
                <input type="text" name="year" class="form-control" placeholder="Event year" required="" />
              </div>
              <div>Event Name <br>
                <input type="text" name="name" class="form-control" placeholder="Name" required="" />
              </div>
              <div>Chairman <br>
                <input type="text" name="chairman" class="form-control" placeholder="Chairman" required="" />
              </div>
              <div>Secretary<br>
                <input type="text" name="secretary" class="form-control" placeholder="Secretary" required="" />
              </div>
              <div>Treasurer <br>
                <input type="text" name="tresurer" class="form-control" placeholder="Treasurer" required="" />
              </div>
              

              <div>
                <input type="submit" class="btn btn-success submit" name="submit" value="Create"> 
                  
                </div>
              </div>
               </form>
            </section>
              </div>
           <!-- <div><font size="6"><u>Assign Team Leaders</u></font></div>
 -->
<div><font size="6"><span class="label label-info" align="center">Assign Team Leaders</span></font></div>

  </div>

 


 <footer class="footer">     
  <h1 align="center"><i class="fa fa-paw"></i> ICTER EVENT PLANNER</h1>
                  <p align="center">©2017 All Rights Reserved.By University of Colombo School of Computing</p>
          
      </footer>
        
         </body>
</html>