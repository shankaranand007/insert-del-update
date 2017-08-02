<?php 
	include("include.php");

	$fetch = mysqli_query($conn,"SELECT * FROM test") or die(error);
	while ( $row = mysqli_fetch_array($fetch)) {
		# code...
		echo "<br>";
		$id = $row[0];
		echo $row[0]."   ".$row[1]."  ".$row[2]."  ".$row[3]."  ".$row[4]."  ".$row[5]."<form action='edit.php' method ='POST'>
			<input type = 'submit' value = 'edit' name ='submit'>
			<input type = 'hidden' value = '".$id."' name ='hide'>
			</form>
			"."<form action='del.php' method ='POST'>
			<input type = 'submit' value = 'delete' name ='submit'>
			<input type = 'hidden' value = '".$id."' name ='hide'>
			</form>";

			
	}

	
 ?>