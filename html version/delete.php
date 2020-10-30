<?php
include "store_config.php";
session_start();
  $username=mysqli_real_escape_string($con,$_REQUEST['user']);
  $email=mysqli_real_escape_string($con,$_REQUEST['email']);
  $com_about=mysqli_real_escape_string($con,$_REQUEST['complaint_about']);
  $complaint=mysqli_real_escape_string($con,$_REQUEST['complaint']);

 $easy1=$_REQUEST['qid'];




  
   print $mysql="
   DELETE FROM complaint_db
   WHERE
       id=$easy1 ";
    if (mysqli_query($con, $mysql)) {
        echo "hello delete";
       // header('location:editable_table.php?add=1');
    } else {
        echo 'Error: ' . $mysql . '<br>' . print mysqli_error($con);
    }



?>