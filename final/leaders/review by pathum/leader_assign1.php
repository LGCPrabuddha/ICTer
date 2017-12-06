
<?php require_once('inc1/connection.php'); ?>


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
   
    
    </style>
  </head>

  <body class="login">
   
      <!-- <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a> -->
<!-- <div class="login_wrapper"> -->
      <div class="login_wrapper" style="min-height: 1200px">
       
          
   <section class="login_content">
            <form method="POST" action="create_event.php">
              <h1>Assign Leader to Review Committee</h1>              
                <div>
              <div>
                First Name <br>
                <input type="text" name="year" class="form-control" placeholder="Event year" required="" />
              </div>
              <div>Last Name <br>
                <input type="text" name="name" class="form-control" placeholder="Name" required="" />
              </div>
              <div>Email <br>
                <input type="text" name="chairman" class="form-control" placeholder="Chairman" required="" />
              </div>
              <div>Password<br>
                <input type="text" name="secretary" class="form-control" placeholder="Secretary" required="" />
              </div>
              
              

              <div>
                <input type="submit" class="btn btn-success submit" name="submit" value="Create" style="margin-left: 30%; "> 
                  
                </div>
              </div>
               </form>
            </section>

  </div>
  

  </div>

  </div>



 


 <footer class="footer">     
  <h1 align="center"><i class="fa fa-paw"></i> ICTER EVENT PLANNER</h1>
                  <p align="center">©2017 All Rights Reserved.By University of Colombo School of Computing</p>
          
      </footer>
        
         </body>
</html>