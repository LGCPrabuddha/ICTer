
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
    .login_wrapper{
      margin-top: 0px;
    }
    </style>
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="POST" action="create_event.php">
              <h1>Create Event</h1>              

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
              <h1>Assign Group Leaders</h1>   
              <div>Publicity Group <br>
                <input type="email" name="publicity" class="form-control" placeholder="Email Address of group leader" required="" />
              </div>
              <div>Bag Quotation Group <br>
                <input type="email" name="bag" class="form-control" placeholder="Email Address of group leader" required="" />
              </div>
              <div>Keynote Inviting Group <br>
                <input type="email" name="keynote" class="form-control" placeholder="Email Address of group leader" required="" />
              </div>
              <div>Sponsorship Handling Group <br>
                <input type="email" name="sponsorship" class="form-control" placeholder="Email Address of group leader" required="" />
              </div>
              <div>Hotel Quotation Group <br>
                <input type="email" name="hotel" class="form-control" placeholder="Email Address of group leader" required="" />
              </div>
              <div>Refreshmnts Arranging Group <br>
                <input type="email" name="refreshment" class="form-control" placeholder="Email Address of group leader" required="" />
              </div>
              <div>Paper Handling Group <br>
                <input type="email" name="paper" class="form-control" placeholder="Email Address of group leader" required="" />
              </div>

              <div>
                <input type="submit" class="btn btn-success submit" name="submit" value="Create"> 
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