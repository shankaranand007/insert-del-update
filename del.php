<?php 
	include("include.php");

	$del = $_POST['hide'];

	if (isset($del)) {
		# code...
		mysqli_query($conn,"DELETE FROM test WHERE id = '$del' ") or die(mysqli_error($conn));
		echo "success";
	}
		header("location:Signup.php");
 ?>