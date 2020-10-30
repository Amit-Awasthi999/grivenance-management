<?php
include "store_config.php";
session_start();
  echo $username=mysqli_real_escape_string($con,$_POST['user']);
  echo $email=mysqli_real_escape_string($con,$_REQUEST['email']);
  print $password=mysqli_real_escape_string($con,$_REQUEST['pass']);
  print $phone=mysqli_real_escape_string($con,$_REQUEST['phone']);
  print $address=mysqli_real_escape_string($con,$_REQUEST['addre']);
 //$file=$_SESSION['file'];


if(isset($_POST['submit'])){

    $mysql="INSERT INTO `add_parents` ( `username`, `email`, `password`, `phonenumber`, `address`) 
    VALUES ( '$username', '$email', '$password', '$phone', '$address')";
    if (mysqli_query($con, $mysql)) {
        header('location:addteach.php?add=1');
    } else {
        echo 'Error: ' . $mysql . '<br>' . print mysqli_error($con);
    }

}

?>