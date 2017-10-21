<?php require_once('../basefile/header.php'); ?>

<?php 

  $mem_list = '';
  $query = "SELECT * FROM signup,login WHERE login.ugroup='hotel' AND login.email=signup.email AND signup.is_deleted = 0 ORDER BY signup.user_name";
  $mems = mysqli_query($connection,$query);

  if ($mems) {
    while ($mem = mysqli_fetch_assoc($mems)) {
      $mem_list .= "<tr>";
      $mem_list .= "<td>{$mem['user_name']}</td>";
      $mem_list .= "<td>{$mem['email']}</td>";
      $mem_list .= "<td>{$mem['tele_no']}</td>";
      $mem_list .= "</tr>";
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
                <h3>Hotel Group Members</h3>
                    <main>
                      <table class="mhTable">
                        <tr>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Contact Number</th>
                        </tr>

                        <?php echo $mem_list; ?>

                      </table>
                    </main>

              </div>    
            </div>
          </div>                        
        </div>
          
<?php require_once('../basefile/footer.php'); ?>
