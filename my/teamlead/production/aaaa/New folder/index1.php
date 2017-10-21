<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Team Lead Login</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="https://colorlib.com/polygon/gentelella/css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="POST" action="backend/classlogin.php">
              <h1>Team Lead Login</h1>
              <div>
                <input type="text" name="username" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="password" name="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div class="login">
    <form action="index.php" method="post">
      
      <fieldset>
        <legend><h1>Log In</h1></legend>

        <?php 
          if (isset($errors) && !empty($errors)) {
            echo '<p class="error">Invalide User Name or Password</p>';
           } 
         ?> 

         <?php 
          if (isset($_GET['logout'])) {
            # code...
            echo '<p class="arror">You have succesffully logout for the system</p>';
          }
          ?>

        <div class="imgcontainer">
          <img src="img/im2.jpg" alt="student" class="avatar">
        </div>
        
        <p class="int">
          <label for="">I am </label> <br>   
          <select name="che_sele">
            <option value="admin">Admin</option>
            <option value="student">Student</option>
            <option value="teacher">Teacher</option>
          </select>
        </p>

        <p class="int">
          <label for="">Index Number</label>
          <input type="text" name="index" id="" placeholder="Index Number">
        </p>

        <p class="int">
          <label for="">Password</label>
          <input type="password" name="password" id="" placeholder="Password">
        </p>

        <p>
          <button type="submit" name="submit" class="b1">Log In</button>
        </p>
        

      </fieldset>
    </form>
  </div>

                
              </div>
            </form>
          </section>
        </div>

        
      </div>
    </div>
  </body>
</html>