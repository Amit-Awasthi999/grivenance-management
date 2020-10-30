<?php
include "store_config.php";
session_start();
 print $username=mysqli_real_escape_string($con,$_POST['username']);
  print $email=mysqli_real_escape_string($con,$_POST['email']);
  print $com_about=mysqli_real_escape_string($con,$_POST['comabout']);
  print $complaint=mysqli_real_escape_string($con,$_POST['complaint']);

 print $easy1=$_POST['user'];


if(isset($_POST['up_submit'])){
  
   print $mysql="UPDATE complaint_db 
    SET 
    username ='$username',
    email ='$email',
    complaintAbout='$com_about',
    complaintInfo='$complaint'

    WHERE
        id=$easy1";
    if (mysqli_query($con, $mysql)) {
        header('location:allcomplaint.php?add=1');
    } else {
        echo 'Error: ' . $mysql . '<br>' . print mysqli_error($con);
    }

}

?>