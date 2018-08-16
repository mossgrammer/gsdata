<?php
require'dbConnect.php';

		$query = "UPDATE tbl_printer SET ";
		$query .="PrintNote = '".$_POST["PrintNote"]."' ";
		$query .="WHERE PrinterID = '".$_GET["PrinterID"]."' ";
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
