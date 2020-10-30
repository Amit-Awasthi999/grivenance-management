<?php
include "config.php";
session_start();
   print $firstname=mysqli_real_escape_string($con,$_REQUEST['first_name']);
   print  $lastname=mysqli_real_escape_string($con,$_REQUEST['last_name']);

   print  $email=mysqli_real_escape_string($con,$_REQUEST['email']);
  print  $password=mysqli_real_escape_string($con,$_REQUEST['password']);
 
 //$file=$_SESSION['file'];



if(isset($_POST['submit'])){

   print  $mysql="INSERT INTO `com_info` ( `firstname`,`lastname` ,`email`, `password`, `current`) 
    VALUES ( '$firstname', '$lastname', '$email', '$password', current_timestamp())";
    
     mysqli_query($con,$mysql);
   

        header('location:index.php');
    

}

?>