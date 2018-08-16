<?php
$con=mysqli_connect("localhost","root","12345678","gsdata")
  or die("Not Connect To Database");
  //*** Reject user not online
	$intRejectTime = 2; // Minute
	$sql = "UPDATE tbl_login SET LoginStatus = '0', LastUpdate = '0000-00-00 00:00:00'  WHERE 1 AND DATE_ADD(LastUpdate, INTERVAL $intRejectTime MINUTE) <= NOW() ";
	$query = mysqli_query($con,$sql);
 ?>
