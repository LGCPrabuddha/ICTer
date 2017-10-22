<?php require_once('basefile/header.php'); ?>

<?php 

  $task_list = '';
  $task_list1 = '';
  /*$m_index1 = */
  /*$m_index = $_SESSION['user_name']; index eka gana thawa tikak balanna */
  $query = "SELECT * FROM tfood,login WHERE login.user_name = '{$_SESSION['user_name']}' AND login.uindex = tfood.uindex AND tfood.is_deleted = 0   ORDER BY tfood.id";
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

    $query = "UPDATE tfood SET done = 'Finish' ,situation = 'Finish' WHERE id = $task_list1 LIMIT 1";
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
