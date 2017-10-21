<?php require_once('inc1/connection.php'); ?>
<?php
$upload_image=$_FILES['myimage']['name'];
$folder="photo";
$tmp_name=$_FILES['myimage']['tmp_name'];
$name=basename($_FILES['myimage']['name']);
move_uploaded_file($tmp_name,"$folder/$name");
//move_uploaded_file($_FILES["myimage"]["tmp_image"], "$folder".$_FILES["myimage"]["name"]);
$insert_path="INSERT INTO uploads(img_name, img_path) VALUES('$upload_image','$folder')";
$var=mysqli_query($connection,$insert_path);
header("location:upload.php");
?>