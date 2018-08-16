<?php
	session_start();

	require_once("dbConnect.php");

	$strUsername = mysqli_real_escape_string($con,$_POST['txtUsername']);
	$strPassword = mysqli_real_escape_string($con,(md5($_POST['txtPassword'])));

	$strSQL = "SELECT * FROM tbl_login WHERE Username = '".$strUsername."'
	and Password = '".$strPassword."'";
	$objQuery = mysqli_query($con,$strSQL);
	$objResult = mysqli_fetch_array($objQuery);
	if(!$objResult)
	{
		echo "<script type='text/javascript'>";
		echo "alert ('Username or Password Incorrect!!!');";
		echo "window.location='../index.php';";
		echo "</script>";
		exit();
	}
	else
	{
		if($objResult["LoginStatus"] == "1")
		{
			header("location:../computer.php");
			exit();
		}
		else
		{
			//*** Update Status Login
			$sql = "UPDATE tbl_login SET LoginStatus = '1' , LastUpdate = NOW() WHERE UserID = '".$objResult["UserID"]."' ";
			$query = mysqli_query($con,$sql);

			//*** Session
			$_SESSION["UserID"] = $objResult["UserID"];
			session_write_close();

			//*** Go to Main page
			header("location:../computer.php");
		}

	}
	mysqli_close($con);
?>
