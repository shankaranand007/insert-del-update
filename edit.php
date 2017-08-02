<?php 
	include("include.php");

	$edit = $_POST['hide'];


		$sql = mysqli_query($conn,"SELECT * FROM test WHERE id ='$edit'") or die(error);	
		
		while ($row = mysqli_fetch_array($sql)) {
			$fname = $row['fname'];
			$lname = $row['lname'];
		}

		if (isset($_POST['submit'])) {
			# code...
	$edit = $_POST['hide'];	
	$ffname = $_POST['ffname'];
	$llname = $_POST['llname'];

	$sql = mysqli_query($conn,"UPDATE test SET fname='$ffname' WHERE id = '$edit'") or die(mysqli_error($conn));
}else{ echo "error";}


		
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>edit</title>
 </head>
 <body>
 	<form name="updateForm" action="" method="POST">
 		<input type="text" name="ffname" value="<?php echo $fname ?>"><br>
 		<input type="text" name="llname" value="<?php echo $lname ?>">
 		<input type="submit" name="submit" value="submit">
 	</form>
 </body>
 </html>