<?php
include("inc1/connection.php");
session_start();
$my_user=$_SESSION['name'];
$commity=$_SESSION['committee'];


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

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->


    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css">
  .chatbox{
    float:left;
    width: 700px;
    height: 548px;
    min-width: 390px;
    background-color: #00688B;
    margin:0px auto;
    border-radius: 10px;
  }
  .users{
    float: right;
    background-color: #666666;
    width:250px;
    height: 548px;
    margin:0px;
    padding-left: 0px;
    color: white;
    border-radius: 10px;
  }
  .over{
    background-color: grey;
    width:950px;
    height:550px;


    margin-top: 100px;

  }
  .chathead{
    font-family: system-ui;
    padding-top: 10px;
    padding-left: 10px;
    background-color: black;
    height: 60px;
    color: white;
  }
  .userhead{
    font-family: system-ui;
    padding-top: 10px;
    padding-left: 10px;
    background-color: black;
    height: 50px;
  }
  hr{
    border-color: white;
  }
  .ico{
    float: right;
    padding-top: 5px;
    padding-right: 5px;

  }
  .texth{
    float: left;
    font-size: 39px;
  }
  .chatlog{
    background-color: white;
    padding-top:10px;
    padding-right: 10px;
    padding-left: 10px;
    height: 440px;
    width:100%;
    overflow-y: auto;
  }
  .user_list{
    overflow-y: auto;
    padding-top: 10px;
    text-align: left;
    width:249px;
    height: 500px;
    padding-left: 10px;
    padding-right: 10px;
  }
  .textarea{
    border:2px solid red;
    width:60%
  }
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
                  <li><a><i class="fa fa-cloud"></i> Forum<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="trick.php" id="notify">Chat</a></li>
                      <li><a href="query.php">Query</a></li>
                    </ul>
                </ul>
              </div>



            </div>

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
                    <i class="fa fa-envelope-o" id='badge'></i>
                    
                  </a>
                  <ul class="dropdown-menu list-unstyled msg_list" id="chain" >
                  </ul>
      <!-- lllll -->

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
        <div class=" ">
  <div class="over">
    <div class="chatbox">
      <div class="chathead">
        <h3><?php echo $commity;   ?></h3>
      </div>
      <div class="chatlog">

      </div>
       <div class="message">
          <form id="send_message" method='post' action='send.php' class="typing-area">
              <input type="text" name='message' id="messageToBeSent" class="textarea" maxlength = '500' placeholder=" Type here..." autocomplete="off" size="50" />
              <input type='submit' name='send' value='Send' class="send-button"  />
          </form>
       </div>
    </div>
    <div class="users">
      <div class="userhead">
        <div class="texth">
        <h3>User List</h3>
        </div>
        <div class="ico">
        <i class="fa fa-users" aria-hidden="true" style="font-size: 36px"></i>
        </div>
      </div>
      <div class="user_list">

      </div>
    </div>
</div>

        </div>
         </div>

    <!-- jQuery -->
    <script src="jquery-3.2.1.min.js"></script>
    <!-- Bootstrap -->
    <script src="bootstrap.min.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="custom.min.js"></script>
	<!--Display message and Get user list-->
	<script src="ajax.js"></script>

<script>
$(document).ready(function(){
  $("#chain").load("notify.php");

  
  $("#notify").click(function(){
    $.post("change.php", { notified: "Done"})
  });
});

</script>
<script>
  $(document).ready(function(e){
    $.ajaxSetup({cache:false});
    setInterval(function(){
      $.getJSON("count.php", function(json){
        $("#badge").html("<span class='badge bg-green' id='lapp'>"+ json + "</span>");
      });
    }, 1000);
});
  </script>
  </body>
</html>
