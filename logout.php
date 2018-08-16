<?php
	session_start();

	require_once("db/dbConnect.php");

	//*** Update Status
	$sql = "UPDATE tbl_login SET LoginStatus = '0', LastUpdate = '0000-00-00 00:00:00' WHERE UserID = '".$_SESSION["UserID"]."' ";
	$query = mysqli_query($con,$sql);

	session_destroy();
	header("location:index.php");
?>
