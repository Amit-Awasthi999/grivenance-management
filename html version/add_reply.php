<?php
include "store_config.php";
session_start();
print $x=$_POST['esay'];


$mysql="select * from complaint_db where id=$x";
 $result=mysqli_query($con,$mysql );
 if(mysqli_num_rows($result)>0){
    
    while($row=mysqli_fetch_array($result)){
      print  $username= $row['username'];
      print  $email=$row['email'];
      print  $com_about=$row['complaintAbout'];
    }}

   print $com_reply=$_POST['complaint_reply'];




if(isset($_POST['submit'])){
   
    echo "dhfgh";
    print $mysql="INSERT INTO `complaint_db` ( `username`, `email`, `complaintAbout`,`com_reply_num`, `complaintInfo`, `currentat`,`complaint_reply`) 
    VALUES ( '$username', '$email', '$com_about','$x' ,'$com_reply', current_timestamp(),'NULL')";
    if (mysqli_query($con, $mysql)) {
        header('location:editable_table.php?add=1');
    } 
    else {
        echo 'Error: ' . $mysql . '<br>' . print mysqli_error($con);
    }

}

?>