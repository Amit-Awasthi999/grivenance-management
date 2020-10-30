<?php
include "store_config.php";
session_start();
  $username=mysqli_real_escape_string($con,$_POST['user']);
   $email=mysqli_real_escape_string($con,$_REQUEST['email']);
   $password=mysqli_real_escape_string($con,$_REQUEST['pass']);
   $phone=mysqli_real_escape_string($con,$_REQUEST['phone']);
   $address=mysqli_real_escape_string($con,$_REQUEST['addre']);
 //$file=$_SESSION['file'];


if(isset($_POST['submit'])){

  $mysql="INSERT INTO `add_faculity` ( `username`, `email`, `password`, `phonenumber`, `address`) VALUES ('$username', '$email', '$password', '$phone', '$address')";
    if (mysqli_query($con, $mysql)) {
        header('location:addteach.php?add=1');
    } else {
        echo 'Error: ' . $mysql . '<br>' . print mysqli_error($con);
    }

}

?>