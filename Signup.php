<?php 
	include_once("include.php");
	
	
	$fname = isset($_POST['fname']) ? $_POST['fname'] : '';
	$lname = isset($_POST['lname']) ? $_POST['lname'] : '';
	$pass = isset($_POST['pass']) ? $_POST['pass'] : '';
	$age = isset($_POST['age']) ? $_POST['age'] : '';
	$dob= isset($_POST['dob']) ? $_POST['dob'] : '';


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