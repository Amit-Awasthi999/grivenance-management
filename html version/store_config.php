<?php
error_reporting(0);
$host="127.0.0.1";
$user="root";
$password="";
 $db_name="complaints"; 

$con=mysqli_connect($host,$user,$password,$db_name);
if(mysqli_connect_error())
{
    
	 die("falided to connect with mysql:" .mysqli_connect_error());
	 
}

?>