<?php
require'dbConnect.php';

		$query = "UPDATE tbl_notebook SET ";
		$query .="NoteNote = '".$_POST["NoteNote"]."' ";
		$query .="WHERE NotebookID = '".$_GET["NotebookID"]."' ";
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
