<?php session_start(); ?>
<?php require_once('../../inc1/connection.php'); ?>
<?php 

  if (!isset($_SESSION['email'])) {
    header('Location: ../../index.php');
  }


  $myuser=$_SESSION['user_name'];
  if (mysqli_connect_errno()){
    die('Database connection failed' . mysqli_connect_error());
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

    <title>ICTer Event | Hotel Quotation </title>
    <!-- Our customize file -->
    <link href="../../css/main.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="../../../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../../../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../../../vendors/nprogress/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../../../build/css/custom.min.css" rel="stylesheet">
    <style>
    .progress {height: 20px;}
    </style>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <p class="site_title"><i class="fa fa-paw"></i> <span>ICTer Event!</span></p>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile">
              <div class="profile_pic">
                <img src="../../images/<?php echo $_SESSION['user_name']; ?>.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $_SESSION['user_name']; ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
              <br><br><br><br>
                <ul class="nav side-menu">
                  <li><a href="food.php"><i class="fa fa-home"></i> Home </a></li>
                  <li><a href="group.php"><i class="fa fa-table"></i> My Group </a></li>
                  <li><a href="groupTask.php"><i class="fa fa-desktop"></i> Group Task </a></li>
                  <li><a href="myTask.php"><i class="fa fa-edit"></i> My Task </a></li>
                  <li><a><i class="fa fa-envelope-o"></i> My Chat </a></li>
                  <li><a><i class="fa fa-envelope-o"></i> Notification </a></li>
                </ul>
              </div>
             </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="../../../images/<?php echo $_SESSION['user_name']; ?>.jpg" alt=""><?php echo $_SESSION['user_name']; ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="../../logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-bell"></i>
                    <span class='badge bg-red' id='lab' onclick='myFunction()'>
                    <?php
                        $que = "SELECT task FROM notify WHERE member='$myuser' AND status='1'";
                        $result=mysqli_query($connection,$que);
                        $count1 = mysqli_num_rows($result);
                        if($count1>0){
                          echo $count1."</span>";
                        }
                        ?>
                        <script type="text/javascript">
                        function myFunction(){
                          var x = document.getElementById('lab');
                          if (x.style.display === "none") {
                                x.style.display = "block";
                          } else {
                                x.style.display = "none";
                          }
                        }
                        </script>      
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                      <?php
                        while($row=mysqli_fetch_assoc($result)){
                          echo "<li><a href='javascript:;'>"."<b>Allocated new task for you</b><br>".$row['task']."</a></li>";
                        }
                        $query2="UPDATE notify SET status='0' WHERE member='$myuser'";
                        $result2=mysqli_query($connection,$query2);
                      ?> 
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->