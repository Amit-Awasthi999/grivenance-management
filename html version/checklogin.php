<?php
include "config.php";

if(isset($_POST['but_submit'])){

  $username = mysqli_real_escape_string($con,$_POST['user']);
   $password = mysqli_real_escape_string($con,$_POST['pass']);
 $type = mysqli_real_escape_string($con,$_POST['type']);
 if($username=="" || $password==""){

   header('Location:index.php');
   
 }


if($type=='Student'){
  
 $sql_query="select count(*) as cntUser from com_info where firstname='".$username."' and password='".$password."'";

     $result = mysqli_query($con,$sql_query);
     $row =mysqli_fetch_array($result);
      $count =$row['cntUser']; 
    
     if($count > 0)
	   {
    session_start();
    $_SESSION['type'] =$type;
     $_SESSION['username'] =$username;
     header('Location:dashboard.php');
   
  }
  else
{
 header('Location: index.php?err=1');
} 

}

else if($type=='Admin'){
  if($username=="Admin" && $password=="1234"){
    session_start();
     $_SESSION['type'] =$type;
     $_SESSION['username'] =$username;
     header('Location:dashboard1.php');
  }
  else
  {
   header('Location: index.php?err=1');
  } 

}
else if($type=='Parents'){
  print $sql_query="select count(*) as cntUser from com_info where username='".$username."' and password='".$password."'";

  $result = mysqli_query($con,$sql_query);
  $row =mysqli_fetch_array($result);
   $count =$row['cntUser']; 
 
  if($count > 0)
  {
 session_start();
 $_SESSION['type'] =$type;
  $_SESSION['username'] =$username;
  header('Location:dashboard.php');
  }
}
else if($type=='Faculity'){
 print $sql_query="select count(*) as cntUser from Staff_Table where firstname='".$username."' and password='".$password."'";

  $result = mysqli_query($con,$sql_query);
  $row =mysqli_fetch_array($result);
   $count =$row['cntUser']; 
 
  if($count > 0)
  {
 session_start();
 $_SESSION['type'] =$type;
  $_SESSION['username'] =$username;
  header('Location:dashboard.php');
  }
else
{
header('Location: index.php?err=1');
} 
}
else
{
header('Location: index.php?err=1');
} 

}

?>