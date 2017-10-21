
<?php require_once('inc1/connection.php'); ?>
<?php 
     $email = "nimal@gmail.con";
     $m_group = "Review";


  $query = "INSERT INTO gro_member (";
      $query .= "m_mail, m_group";
      $query .= ") VALUE (";
      $query .= "'{$email}', '{$m_group}'";
      $query .= ")";

      /*$query = "UPDATE user SET commite = 'Review' WHERE index_u = 1 LIMIT 1"; 

      $result = mysqli_query($connection,$query);*/
/*      $event_year ="2017";
      $user_name ="nilanka"; 
      $email ="nilanka@gmail.con"; 
      $password="abc"; 
      $hashed_password =sha1($password);
      $tel_no ="0717141242"; 
      $pro_type ="member"; 

      $query = "INSERT INTO user (";
      $query .= "event_year, user_name, email, password, tele_no, profile_type, is_deleted";
      $query .= ") VALUE (";
      $query .= "{$event_year}, '{$user_name}', '{$email}', '{$hashed_password}', {$tel_no},'{$pro_type}', 0";
      $query .= ")";*/

      $result = mysqli_query($connection,$query);

      if ($result) {
        // query successfull.... redireting to modify-admin page
        echo "query ok";
      }else{
        echo "query fald";
      }
 ?>
