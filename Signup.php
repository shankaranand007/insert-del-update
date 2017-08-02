<?php 
	include_once("include.php");
	
	$id = isset($_POST['id']) ? $_POST['id'] : '';
	$id = isset($_POST['fname']) ? $_POST['fname'] : '';
	$id = isset($_POST['lname']) ? $_POST['lname'] : '';
	$id = isset($_POST['pass']) ? $_POST['pass'] : '';
	$id = isset($_POST['age']) ? $_POST['age'] : '';
	$id = isset($_POST['dob']) ? $_POST['dob'] : '';


	if (isset($fname)) {
		$sql =mysqli_query($conn,"INSERT INTO test(fname,lname,pass,age,dob) VALUES ('$fname','$lname','$pass','$age','$dob')");
		header("location:display.php");
		
	}
	

	
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>signup</title>
 </head>
 <body>
 	<form action="Signup.php" method="POST">
 		<input type="text" name="fname"><br>
 		<input type="text" name="lname"><br>
 		<input type="password" name="pass"><br>
 		<input type="number" name="age"><br>
 		<input type="text" name="dob"><br>
 		<input type="submit" name="submit">
 	</form>
 </body>
 </html>