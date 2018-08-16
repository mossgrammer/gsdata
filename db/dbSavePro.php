<?php
require'dbConnect.php';

		$query = "UPDATE tbl_projector SET ";
		$query .="ProNote = '".$_POST["ProNote"]."' ";
		$query .="WHERE ProjectorID = '".$_GET["ProjectorID"]."' ";
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
