<?php
include("config.php");
print $a=$_POST['id']; die();
$b=$_POST['id'];
$sql_query1="select * from question where subject='PHP'";
$result1=mysqli_query($con,$sql_query1);
//$row=mysqli_fetch_array($result1);
$ar=array(3);
print $esy=$_REQUEST[$x];die();

while($row=mysqli_fetch_array($result1))
{
	 $ar[]=$row['id'];


if($a==$b)
	{
		$newid2=next($ar); 
		
	}
}
	
header("Location:a.php?id=$newid2");
?>