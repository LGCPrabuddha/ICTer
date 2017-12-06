
<?php 

//to include the connection
include_once('pathumConnection.php');
?>


<?php

// for insert query 

if (isset($_POST['save_button'])) {

      //echo "Sav button if";

        $hotel_name = $_POST['h_name'];
        $hotel_address = $_POST['address'];
        $hot_line = $_POST['h_line'];
        $email = $_POST['email'];
        $single_room_price = $_POST['srp'];
        $double_room_price = $_POST['drp'];
        $web = $_POST['web'];
        $distance=$_POST['distance'];

        $query="INSERT INTO hoteldb(company_name,address,email,tell_no,s_room_price,d_room_price,web_site,distance) VALUES ('{$hotel_name}','{$hotel_address}','{$email}',{$hot_line},'{$single_room_price}','{$double_room_price}','{$web}','{$distance}')";
        $result=mysqli_query($db_connection,$query);

        if ($result) {
          //echo "Successfully saved your record";
        }else{
          echo "Database query failed";
        }
}


//searching part
// else if ($_POST['button']=="search") {
    
//   $index_number = $_POST['indexnumber'];
//         $first_name = $_POST['firstname'];
//         $last_name = $_POST['lastname'];
//         $tell_no = $_POST['tellno'];

//         $query="SELECT* FROM user WHERE index_num = {$index_number}";
//         $result=mysqli_query($db_connection,$query);
//         //result set assign to an associtive array called $row
//         $row=mysqli_fetch_assoc($result);
//         //here we can retrive values from calling by index
//         printf ("%s %s %s %s\n",$row["index_num"],$row["first_name"],$row["last_name"],$row["tel_no"]);

//         if ($result) {
//           //echo mysqli_affected_rows($db_connection)." record updated";
//         }else{
//           echo "Database query failed";
//         }
// }

//for update query
else if (isset($_POST['update_button'])) {
    
  $hotel_name = $_POST['h_name'];
        $hotel_address = $_POST['address'];
        $hot_line = $_POST['h_line'];
        $email = $_POST['email'];
        $single_room_price = $_POST['srp'];
        $double_room_price = $_POST['drp'];
        $web = $_POST['web'];
        $distance=$_POST['distance'];

        
        
        $query="UPDATE hoteldb SET company_name='{$hotel_name}',address='{$hotel_name}',email='{$email}',tell_no={$hot_line},s_room_price='{$single_room_price}',d_room_price='{$double_room_price}',web_site='{$web}',distance='{$distance}' WHERE company_name='{$hotel_name}'";
        $result=mysqli_query($db_connection,$query);

        if ($result) {
          //echo mysqli_affected_rows($db_connection)." record updated";
        }else{
          echo "Database query failed";
        }
}
//for delete query
else if (isset($_POST['delete_button'])) {
    
  $hotel_name = $_POST['h_name'];
        
        $query="DELETE FROM hoteldb WHERE company_name = '{$hotel_name}' LIMIT 1";
        $result=mysqli_query($db_connection,$query);

        if ($result) {
          echo mysqli_affected_rows($db_connection)." record deleted";
        }else{
          echo "Database query failed";
        }
}
?>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Hotel Database </title>
    <!-- Our customize file -->
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
                  <li><a href="hleader.php"><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    
                  </li>
                  
                  <li><a href="hmembers.php"><i class="fa fa-edit"></i> Committee Details <span class="fa fa-chevron-down"></span></a>
                  
                </li>
                  <li><a href="msaintask.php"><i class="fa fa-desktop"></i> Assigning Task <span class="fa fa-chevron-down"></span></a>
                    
                  </li>
                  <li><a href="hoteldb.php"><i class="fa fa-table"></i> Committee Database<span class="fa fa-chevron-down"></span></a>
                   
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



   <div class="right_col" role="main">
       <div class="">
            <div class="row top_tiles">
                 <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>


    <!-- <div class="form-group">               
    <form class="form" role="form" method="post"  action="hoteldb.php">
      <div class="container">
                    <h2  align="center"><b>Accomodations for the ICTer Conference</b></h2>
                    <p align="center">Insert the Hotel quatation details below</p>
      <label for="name">Hotel Name</label>
    <input type="text" class="form-control" name="h_name" id="h_name" placeholder="Enter name" >
   </div>
   <div class="form-group">
      <label >Address</label>
    <input type="text" class="form-control" name="address" id="address" placeholder="Enter name" >
   </div> 
   <div class="form-group">
      <label >Email</label>
    <input type="text" class="form-control" name="email" id="email" placeholder="Enter email" >
 </div>
   <div class="form-group">
      <label >Hot line</label>
    <input type="text" class="form-control" name="h_line" id="h_line" placeholder="Enter name" >
   </div> 
   <div class="form-group">
      <label >Single Room Price</label>
    <input type="text" class="form-control" name="srp" id="srp" placeholder="Enter name" >
   </div>
   <div class="form-group">
      <label >Double Room Price</label>
    <input type="text" class="form-control" name="drp" id="drp" placeholder="Enter name" >
   </div>
   <div class="form-group">
      <label >Web site</label>
    <input type="text" class="form-control" name="web" id="web" placeholder="Enter name" >
   </div>
   <div class="form-group">
      <label >Distance</label>
    <input type="text" class="form-control" name="distance" id="distance" placeholder="Enter name" >
   </div>
   <div>
   <button type="submit" class="btn btn-default" name="save_button" >Save</button>
   <button type="submit" class="btn btn-default" name="delete_button" >Delete</button>
   <button type="submit" class="btn btn-default" name="update_button" >Update</button>
   <button type="reset" class="btn btn-default">Reset</button>
 </div>
 </div>
</form>
<hr> -->

<?php
        $userq="SELECT * FROM hoteldb";
        $result=mysqli_query($db_connection,$userq);
        //$row=mysqli_fetch_array($answer)
        ?>

                  <div class="x_content">
                   
                    <table id="datatable-checkbox" class="table table-striped table-bordered bulk_action">
                      <thead>
                        <tr>
                          
                          
                          <th>Hotel name</th>
                          <th>Address</th>
                          <th>Email</th>
                          <th>Tel-No</th>
                          <th>Single room price</th>
                          <th>Double room price</th>
                          <th>Website</th>
                          <th>Distance</th>
                        </tr>
                      </thead>


                      <tbody><?php while($row=mysqli_fetch_array($result)){ ?>
                                <tr>   
                                  <td><?php echo $row['company_name']; ?></td>
                                  <td><?php echo $row['address']; ?></td>
                                  <td><?php echo $row['email']; ?></td>
                                  <td><?php echo $row['tell_no'];  ?></td>
                                  <td><?php echo $row['s_room_price'];  ?></td>
                                  <td><?php echo $row['d_room_price'];  ?></td>
                                  <td><?php echo $row['web_site'];  ?></td>
                                  <td><?php echo $row['distance'];  ?></td>
                                </tr><?php } ?>
                      </tbody>
                    </table>
                  </div>
                  <div>
                     <a href="hotelm.php" class="btn btn-info btn-lg">
                       <span class="glyphicon glyphicon-arrow-left"></span> Back
                      </a>
                  </div>  
                </div>
              </div>

    </div>
</div>
    

<!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../vendors/datatables.net-scroller/js/datatables.scroller.min.js"></script>
    <script src="../vendors/jszip/dist/jszip.min.js"></script>
    <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

    <!-- Datatables -->
    <script>
      $(document).ready(function() {
        var handleDataTableButtons = function() {
          if ($("#datatable-buttons").length) {
            $("#datatable-buttons").DataTable({
              dom: "Bfrtip",
              buttons: [
                {
                  extend: "copy",
                  className: "btn-sm"
                },
                {
                  extend: "csv",
                  className: "btn-sm"
                },
                {
                  extend: "excel",
                  className: "btn-sm"
                },
                {
                  extend: "pdfHtml5",
                  className: "btn-sm"
                },
                {
                  extend: "print",
                  className: "btn-sm"
                },
              ],
              responsive: true
            });
          }
        };

        TableManageButtons = function() {
          "use strict";
          return {
            init: function() {
              handleDataTableButtons();
            }
          };
        }();

        $('#datatable').dataTable();

        $('#datatable-keytable').DataTable({
          keys: true
        });

        $('#datatable-responsive').DataTable();

        $('#datatable-scroller').DataTable({
          ajax: "js/datatables/json/scroller-demo.json",
          deferRender: true,
          scrollY: 380,
          scrollCollapse: true,
          scroller: true
        });

        $('#datatable-fixed-header').DataTable({
          fixedHeader: true
        });

        var $datatable = $('#datatable-checkbox');

        $datatable.dataTable({
          'order': [[ 1, 'asc' ]],
          'columnDefs': [
            { orderable: false, targets: [0] }
          ]
        });
        $datatable.on('draw.dt', function() {
          $('input').iCheck({
            checkboxClass: 'icheckbox_flat-green'
          });
        });

        TableManageButtons.init();
      });
    </script>
    <!-- /Datatables -->
  </body>
</html>        
