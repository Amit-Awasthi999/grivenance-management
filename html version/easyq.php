<?php
include("config.php");

$sql_query1="SELECT * from complaint_db WHERE username='amit'";
$result1=mysqli_query($con,$sql_query1);
$row1=mysqli_fetch_array($result1);
		
print $row1['id'];

	 print $row1['complaintAbout'];
	


?>
<form method="POST" action="b.php">
<input type="hidden" name="id" value="<?php print $row1['complaintAbout'];?>">
<input type="submit" name="submit" value="next">
</form>