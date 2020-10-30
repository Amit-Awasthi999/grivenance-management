<?php
include "store_config.php";
session_start();
   $username=mysqli_real_escape_string($con,$_REQUEST['user']);
  $email=mysqli_real_escape_string($con,$_REQUEST['email']);
  $com_about=mysqli_real_escape_string($con,$_REQUEST['complaint_about']);
  $complaint=mysqli_real_escape_string($con,$_REQUEST['complaint']);
 //$file=$_SESSION['file'];



if(isset($_POST['submit'])){

    $mysql="INSERT INTO `complaint_db` ( `username`, `email`, `complaintAbout`, `complaintInfo`, `currentat`) 
    VALUES ( '$username', '$email', '$com_about', '$complaint', current_timestamp())";
    if (mysqli_query($con, $mysql)) {
        header('location:editable_table.php?add=1');
    } else {
        echo 'Error: ' . $mysql . '<br>' . print mysqli_error($con);
    }

}

?>