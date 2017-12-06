


<?php
// Check connection
require_once('con.php');

$sql="SELECT * FROM adm_task";

if ($result=mysqli_query($connection,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  $sql2="SELECT * FROM adm_task WHERE Status='1'";
  if($query2=mysqli_query($connection,$sql2)){
    $result2=mysqli_num_rows($query2);
  }
  //Create the Percentage
  function percentage($a, $b){
	  return ($a/$b)*100;
  }
  $percent=percentage($result2,$rowcount);

  // Free result set
  mysqli_free_result($result);
  mysqli_free_result($query2);
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

    <title>Home Page </title>
    <!-- Our customize file -->
    <link href="main.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="Team_leaders/vendors/nprogress/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="custom.min.css" rel="stylesheet">
    <style>
    .container{
      border-style: 1px solid;

      padding: 2px 1px 2px;
    }
    .heading{
      background-color: #696969;
      color: white;
      border-top-left-radius:8px;
      border-top-right-radius:8px;
      padding: 2px 1px 2px;
      height:50px;
    }
    .due_body{
      background-color: white;
      height:497px;
      border-bottom-right-radius:8px;
      border-bottom-left-radius:8px;
      padding: 10px;
      overflow-y: auto;
    }
    .cale{
      background-color: white;
    }
    .mew{
      border-radius: 10px;
      border: 2px solid;
    }
    .progress {height: 20px;}
    </style>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>ICTER</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>John Doe</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="hleader.php"><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.html">Dashboard</a></li>
                      <li><a href="index2.html">Dashboard2</a></li>
                      <li><a href="index3.html">Dashboard3</a></li>
                    </ul>
                  </li>

                  <li><a href="hmembers.php"><i class="fa fa-edit"></i> Committee Details <span class="fa fa-chevron-down"></span></a>

                </li>
                  <li><a href="msaintask.php"><i class="fa fa-desktop"></i> Assigning Task <span class="fa fa-chevron-down"></span></a>

                  </li>
                  <li><a href="hotelm.php"><i class="fa fa-table"></i> Committee Database<span class="fa fa-chevron-down"></span></a>

                </ul>
              </div>



            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <!-- <div class="sidebar-footer hidden-small">
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
            </div> -->
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
                    <img src="images/img.jpg" alt="">John Doe
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                  <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-bell"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">

          <div class="left-main">
            <div class="process">
              <div class="process" id="process-heading">
                <h3>Progess of Each Committee</h3>
              </div>

              <div class="process" id="process-body">
                <h4><a href="Publicity.html"> Publicity Committee</a></h4>
                <div class="progress">
                   <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 25%; height: 20px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" id="pro">25%</div>
                   </div>
                  <h4> Sponsorship Handling Gorup</h4>
                <div class="progress">
                   <div class="progress-bar progress-bar-striped" role="progressbar" style="width: <?php echo $percent; ?>%; height: 20px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo $percent; ?>%</div>
                   </div>
                  <h4> Bag Quatation </h4>
                <div class="progress">
                   <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 45%; height: 20px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">45%</div>
                   </div>
                  <h4> Food Allocation</h4>
                <div class="progress">
                   <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 55%; height: 20px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">55%</div>
                   </div>
                  <h4> Paper Handling Gorup</h4>
                <div class="progress">
                   <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 65%; height: 20px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">65%</div>
                   </div>
                  <h4>Keynote Group</h4>
                <div class="progress">
                   <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 25%; height: 20px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                   </div>
                  <h4> Hotel Quatation Group</h4>
                <div class="progress">
                   <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 25%; height: 20px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                   </div>

              </div>
            </div>
          </div>
            <div class="right-main">
              <div class="container">
                <div class="heading">
                  <h3>Due Dates</h3>
                </div>
                <div class="due_body">
                <?php
                  $send="SELECT Task,Status,Team,Duration FROM adm_task WHERE Status='0' ORDER BY Duration ASC";
                  $resul92=mysqli_query($connection,$send);
                  while($rew=mysqli_fetch_assoc($resul92)){
                    echo "<div class='mew'><h4>".$rew['Task']."</h4><h4>Team: ".$rew['Team']."</h4><h4>".$rew['Duration']."</h4></div>";
                  }
                 ?>
               </div>
              </div>

        </div>



    <!-- jQuery -->
    <script src="jquery-3.2.1.min.js"></script>
    <!-- Bootstrap -->
    <script src="bootstrap.min.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="custom.min.js"></script>
	<!--Progress bar-->


  </body>
</html>
