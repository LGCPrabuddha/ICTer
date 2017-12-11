<?php include 'inc1/connection.php'; ?>

<?php 

if(isset($_POST['submit'])){
  $reviewer=$_POST['reviewer'];
  $head=$_POST['head'];
  $message=$_POST['message'];

  $que="INSERT INTO notifyreviewer(reviewer,team,head,message,status) VALUES ('$reviewer','review','$head','$message','1')";
  $res=mysqli_query($connection,$que);

}

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <script type="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>

    <title>Send Notifications </title>
    <!-- Our customize file
   -->
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


    <style>

    .select-style {
    border: 1px solid #ccc;
    width: 400px;
    height: 30px;
    border-radius: 3px;
    overflow: hidden;
    background: #fafafa url("img/icon-select.png") no-repeat 90% 50%;
}

.select-style select {
    padding: 5px 8px;
    width: 200%;
    height: 200%;
    border: none;
    box-shadow: none;
    background: transparent;
    background-image: none;
    -webkit-appearance: none;
}

.select-style select:focus {
    outline: none;
}

table, td, th {
    border: 1px solid #ddd;
    text-align: left;
}

table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    padding: 15px;
}
th {
    background-color: #4CAF50;
    color: white;
}
tr:nth-child(even){background-color: #f2f2f2}

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
                <h2>Admin</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="test1.php"><i class="fa fa-home"></i> Paper Details <span class="fa fa-chevron-down"></span></a>

                  </li>

                  <li><a href="test2.php"><i class="fa fa-edit"></i> Reviewer Details <span class="fa fa-chevron-down"></span></a>

                </li>
                  <li><a href="test5.php"><i class="fa fa-desktop"></i> Reviewed Papers <span class="fa fa-chevron-down"></span></a>

                  </li>
                  <li><a href="test11.php"><i class="fa fa-table"></i> Final Review<span class="fa fa-chevron-down"></span></a>

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
             <!-- page content -->
        <div class="right_col" role="main">
            <div class="container">
              <div class="page-title">
                <div class="task-center">
                </div>
                </div>

                <div class="insert-option">
				<div style="margin-top:-50px;" class="insert-head">
					<center><h2><b>Send Notifications</b></h2></center><hr>

				</div>
				<div class="insert-content">

          <form class="" action="notification.php" method="post">
            <div class="">
              <p><h3>Reviewer</h3></p>
              <select class="select-style" name="reviewer" >
                <option>Select a Reviewer to send a notification</option>
                    <?php
                        $userq="SELECT * FROM reviewer_detail;";
                        $answer=mysqli_query($connection,$userq);
                         while($row2=mysqli_fetch_array($answer)){ ?>
                <option value=<?php echo '"'.$row2['name'].'"'; ?>><?php echo $row2['name']; ?></option>
                    <?php  }   ?>
              </select>            </div>
            <div class="">
              <p><h3>Header</h3></p>
              <input style="height:20px;" type="text" name="head" value="">
            </div>
            <div class="">
              <p><h3>Massage</h3></p>
              <textarea style="width:600px; height:150px;" name="message" rows="8" cols="100"></textarea>
            </div>
                <input style="margin-top:40px; margin-left:30px;" type="submit" name="cancel" class="btn btn-success submit" onclick="this.form.reset();" value="Cancel">
                <input style="margin-top:40px; margin-left:30px;" type="submit" name="submit" class="btn btn-success submit" value="submit">

          </form>




</div>
				</div>










                   </div>
                  </div>
                </div>
              </div>

   <!-- jQuery -->
    <script src="jquery-3.2.1.min.js"></script>
    <!-- Bootstrap -->
    <script src="bootstrap.min.js"></script>
    <script></script>
        <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

  </body>
</html>
