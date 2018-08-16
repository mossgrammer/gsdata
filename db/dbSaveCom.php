<?php
require'dbConnect.php';

		$query = "UPDATE tbl_computer SET ";
		$query .="ComNote = '".$_POST["ComNote"]."' ";
		$query .="WHERE ComputerID = '".$_GET["ComputerID"]."' ";
		$result=mysqli_query($con,$query);
		if($result)
		{
			echo "<center><h1>Save Done</h1></center>";
		}
		else
		{
			echo "<center>Error Save [".$query."]</center>";
		}

	?>
