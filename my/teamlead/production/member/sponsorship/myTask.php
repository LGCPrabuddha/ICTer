<?php require_once('basefile/header.php'); ?>

<?php 

  $task_list = '';
  $task_list1 = '';
  /*$m_index1 = */
  /*$m_index = $_SESSION['user_name']; index eka gana thawa tikak balanna */

  $sql="SELECT * FROM tsponsorship,login WHERE login.user_name = '{$_SESSION['user_name']}' AND login.uindex = tsponsorship.uindex AND tsponsorship.is_deleted = 0";

  if ($result=mysqli_query($connection,$sql))
    {
    // Return the number of rows in result set
    $rowcount=mysqli_num_rows($result);
    $sql2="SELECT * FROM tpublicity,login WHERE tsponsorship.done='Finish' AND login.user_name = '{$_SESSION['user_name']}' AND login.uindex = tsponsorship.uindex AND tsponsorship.is_deleted = 0 ";

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

  $query = "SELECT * FROM tsponsorship,login WHERE login.user_name = '{$_SESSION['user_name']}' AND login.uindex = tsponsorship.uindex AND tsponsorship.is_deleted = 0   ORDER BY tsponsorship.id";
  $tasks = mysqli_query($connection,$query);

  // $task_list1 = "<head> <meta http-equiv=\"refresh\" content=\"3\"> </head>";

 /* $user = mysqli_fetch_assoc($tasks);
  $_SESSION['done'] = $user['done'];

  if ($_SESSION['done'] == 'Finishd') {
    # code...
  }*/

  if ($tasks) {
    while ($task = mysqli_fetch_assoc($tasks)) {
      $task_list .= "<tr>";
      $task_list .= "<td>{$task['task']}</td>";
      $task_list .= "<td>{$task['assdate']}</td>";
      $task_list .= "<td>{$task['enddate']}</td>";
      $task_list .= "<td>{$task['done']}</td>";
    } 
  }else {
      echo "Database query failed.";
    }

  if (isset($_POST['fsubmit'])) {

    $task_list1= $_POST['id'];

    $query = "UPDATE tsponsorship SET done = 'Finish' ,situation = 'Finish' WHERE id = $task_list1 LIMIT 1";
    $result = mysqli_query($connection,$query);

    if ($result) {
      // query successfull.... redireting to modify-admin page
      // echo $task_list1;
      // header('Location: groupTask.php');
    }else{
      echo 'error';
    }
    // header("Refresh:0");
  }

?>


        <!-- page content -->
        <div style="height: 700px;" class="right_col" role="main">
          
          <div class="left-main">
            <div class="process">

            <h1>To Day : <!-- cccc -->
            <?php echo date("d/m/y"); ?></h1> <!-- ccc -->
            

              <div style="width: 1000px;" class="process" id="process-heading">
                <h3>My Task </h3>

                <br>
                <h3 style="color: #708090;"> Progess of My Task </h3>
                
                <div class="progress">
                   <div class="progress-bar progress-bar-striped" role="progressbar" style="width: <?php echo $percent; ?>%; height: 20px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo $percent; ?>%</div>
                </div>

                <main>
                  <table class="mhTable">
                    <tr>
                      <th>Task</th>
                      <th>Assign Date</th>
                      <th>End Date</th>
                      <th>situation</th>
                    </tr>

          

                    <?php echo $task_list; ?>



                    

                  </table>
                </main>

              </div>    
            </div>
          </div>                        
        </div>    
          

<?php require_once('../basefile/footer.php'); ?>
