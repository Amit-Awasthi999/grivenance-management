
    

<?php
include "store_config.php";
        print $x=$_POST['$xid'];
        
      
        $q=$_POST['qid'];

       //print $mysql2="select * from complaint_db where id=$q";
       foreach($x as $y){
        print $mysql2="select * from complaint_db where id=$q";
        print $mysql1="select * from staff_table where id=$y";
       print $result1= mysqli_query($con,$mysql1);
        }
        header('location:allcomplaint.php?add=1');
       
?>
