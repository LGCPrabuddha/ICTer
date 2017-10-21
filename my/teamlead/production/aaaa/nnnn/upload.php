
<?php require_once('inc1/connection.php'); ?>


<!DOCTYPE html>
<html>
<head>
<title>Image Upload</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

</head>
<body>
<form method="post" enctype="multipart/form-data" class="form-horizontal" action="store.php">
     <input type="file" name="myimage">
     <input type="submit" name="submit_image" value="upload">
 </form>
 <table class="table table-bordered">
      <tr><td>Image</td></tr>
      <?php
        $query2="SELECT * FROM uploads ORDER BY img_id DESC";
        $result=mysqli_query($connection,$query2);
        while($row=mysqli_fetch_array($result)){
        	$image_name=$row['img_name'];
        	$image_path=$row['img_path'];
          echo '
              <tr>
                <td>
                  <img src='.$image_path.$image_name.' />
                  </td>
               </tr>   
          ';
        }
      ?>
    </table>
 <script src="jquery-3.2.1.min.js"></script> 
 <script>
 $(document).ready(function(){
    $("save").click(function(){
      var image_name=$("#image").val();
      if(image_name==''){
        alert("Please insert image");
        return false;
      }else{
        var extension=$("#image").val.split('.').pop().toLowerCase();
        if(jQuery.inArray(extension,['jpg','jpeg','gif','png']==-1)){
          alert("invalid file extension");
          $("#image").val('');
          return false;
        }
      }
    })
 })
 </script>  

</body>
</html>