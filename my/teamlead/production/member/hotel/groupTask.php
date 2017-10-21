<?php require_once('../basefile/header.php'); ?>

<?php 

  $task_list = '';

  $query = "SELECT * FROM thotel WHERE is_deleted = 0 ORDER BY id";
  $tasks = mysqli_query($connection,$query);

  if ($tasks) {
    while ($task = mysqli_fetch_assoc($tasks)) {
      $task_list .= "<tr>";
      $task_list .= "<td>{$task['task']}</td>";
      $task_list .= "<td>{$task['assdate']}</td>";
      $task_list .= "<td>{$task['enddate']}</td>";
      $task_list .= "<td>{$task['situation']}</td>";
      $task_list .= "</tr>";
    } 
  }else {
      echo "Database query failed.";
    }


?>

        <!-- page content -->
        <div style="height: 1000px;" class="right_col" role="main">
          
          <div class="left-main">
            <div class="process">

            <h1>To Day : <!-- cccc -->
            <?php echo date("d/m/y"); ?></h1> <!-- ccc -->

              <div style="width: 800px;" class="process" id="process-heading">
                <h3>All Task in Hotel Group</h3>
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
