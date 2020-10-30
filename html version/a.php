<?php
include("config.php");

$sql_query1="SELECT * from complaint_db WHERE username='amit'";
$result1=mysqli_query($con,$sql_query1);
$row1=mysqli_fetch_array($result1);
		
print $row1['id'];

	 print $row1['complaintAbout'];
	





	$sql_query1="select * from question where id='$aid' and subject='PHP'";
	$result1=mysqli_query($con,$sql_query1);
	$row1=mysqli_fetch_array($result1);
	echo $row1['question']."<br>";
	/*echo $row1['option1']."<br>";
	echo $row1['option2']."<br>";
	echo $row1['option3']."<br>";
	echo $row1['option4']."<br>"; */

?>
<form method="POST" action="b.php">
<?php
$x=$row1['id'];?>
<input type="hidden" name="id" value="<?php print $row1['id'];?>">
<input type="submit" name="submit" value="next">
</form>