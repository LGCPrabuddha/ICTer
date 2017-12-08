
<?php
require_once('connection.php');

if(isset($_POST['submit'])){
    $task=$_POST['task'];

    $duration=$_POST['duration'];
    foreach($_POST['team'] as $selected){
      $inadd="INSERT INTO adm_task (Task, Status, Team, Duration) Values ('$task', '0', '$selected','$duration')";
      $enter=mysqli_query($connection,$inadd);
    }



    header("location:assigntask.php");
}
if(isset($_POST['done'])){
    if(!empty($_POST['bill'])){
        foreach($_POST['bill'] as $select){
            $sql3 = "UPDATE adm_task SET status = '1' WHERE Task = '$select'";
            $enter3=mysqli_query($connection,$sql3);

        }
    }else{
        echo "plz enter the task";
    }
 }



 ?>


<!DOCTYPE html>
<html lang="en">
  <head>


    <title>User Interface </title>
    <script type="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>


    <link href="css/CDetail.css" rel="stylesheet">
<!-- Bootstrap -->
<link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Font Awesome -->
<link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<!-- NProgress -->
<link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
<!-- iCheck -->
<link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
<!-- bootstrap-wysiwyg -->
<link href="../vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
<!-- Select2 -->
<link href="../vendors/select2/dist/css/select2.min.css" rel="stylesheet">
<!-- Switchery -->
<link href="../vendors/switchery/dist/switchery.min.css" rel="stylesheet">
<!-- starrr -->
<link href="../vendors/starrr/dist/starrr.css" rel="stylesheet">

<!-- Custom Theme Style -->
<link href="../build/css/custom.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>


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
                  <li><a href="progress.php"><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    
                  </li>

                  <li><a href="committee_details.php"><i class="fa fa-edit"></i> Committee Details <span class="fa fa-chevron-down"></span></a>

                </li>
                  <li><a href="assigntask.php"><i class="fa fa-desktop"></i> Assigning Task <span class="fa fa-chevron-down"></span></a>

                  </li>
                  <li><a href="hotelm.php"><i class="fa fa-table"></i> Committee Database<span class="fa fa-chevron-down"></span></a>

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
     <!-- page content -->
        <div class="right_col" role="main">



    <div class="insert-option">
				<div class="insert-head">
					<h2><b>Insert the Data</b></h2><hr>

				</div>
				<div class="insert-content">
				<form method="POST" action="assigntask.php">
          <div class="form-row">

            <div class="form-group col-md-4">
			Task<br><input type="text" name="task" class="form-control" id="exampleInputEmail1" placeholder="Enter Task"></div>
                <div class="form-group col-md-4">
                Team<br>

                <select name="team[]" class="form-control"> // Initializing Name With An Array
                  <option type="hidden" value="default" selected>Choose the Team</option>
                <option value="Commity1">Bag Quatation</option>
                <option value="Commity2">Sponsorship Handling</option>
                <option value="Commity3">Publicity Handling</option>
                <option value="Commity4">Food Allocation</option>
                <option value="Commity5">Paper Handling</option>
                <option value="Commity6">Key Note</option>
                <option value="Commity7">Hotel Quataion</option>
              </select></div>
              <div class="form-group col-md-4">
Due Date<br><div class="form-group"> <!-- Date input -->
        <!-- <label class="control-label" for="date">Date</label> -->
        <input class="form-control" id="date" name="duration" placeholder="YYYY/MM/DD" type="text"/>
      </div><br>
              </div></div>
                <input type="submit" name="submit" value="Submit" class="btn btn-primary">

<br><br>

				<table class="table">
          <thead class="thead-light">
  <tr>
    <th width="5%" scope="col">Status</th>
    <th scope="col">Task</th>
    <th scope="col">Team</th>
    <th scope="col">Due Date</th>
  </tr></thead>
  <tbody><?php $result="SELECT * FROM adm_task"; $main=mysqli_query($connection,$result); while($row=mysqli_fetch_array($main)){ ?>
  <tr>
    <td width="5%"><input type="checkbox" name="bill[]" value=<?php echo '"' . $row['Task'] . '"'; if($row['Status'] == "1") {echo "checked='checked'"; } ?>></td>
    <td><?php echo $row['Task']; ?></td>
    <td><?php echo $row['Team']; ?></td>
    <td><?php echo $row['Duration'];  ?></td>
  </tr><?php } ?>
 </tbody></form>
</table>
<input type="submit" name="done" value="done" class="btn btn-primary">
</div>
				</div>







                  </div>
                </div>
              </div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>

    <script>
    $(document).ready(function(){
      var date_input=$('input[name="date"]'); //our date input has the name "date"
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      var options={
        format: 'yyyy/mm/dd',
        container: container,
        todayHighlight: true,
        autoclose: true,
      };
      date_input.datepicker(options);
    })
</script>






   <!-- jQuery -->
    <script src="jquery-3.2.1.min.js"></script>
    <!-- Bootstrap -->
    <script src="bootstrap.min.js"></script>


        <!-- Custom Theme Scripts -->
    <script src="custom.min.js"></script>

    
  </body>
</html>
