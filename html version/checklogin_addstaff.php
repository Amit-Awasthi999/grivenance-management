<?php
include "config.php";
session_start();
if(isset($_POST['but_submit'])){
print $firstname=mysqli_real_escape_string($con,$_REQUEST['first_name']);
print  $lastname=mysqli_real_escape_string($con,$_REQUEST['last_name']);
print  $teacher_type=mysqli_real_escape_string($con,$_REQUEST['teacher_type']);

print  $email=mysqli_real_escape_string($con,$_REQUEST['email']);
print  $password=mysqli_real_escape_string($con,$_REQUEST['password']);

print  $mysql="INSERT INTO `staff_table` ( `firstname`,`lastname`,`teacher type`,`email`, `password`, `current`) 
VALUES ( '$firstname', '$lastname', '$teacher_type','$email', '$password', current_timestamp())";

mysqli_query($con,$mysql);


header('location:dashboard1.php');


}
?>