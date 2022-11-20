<?php
@include('config.php');
session_start();

if (isset($_POST['register'])) {
	$uname = mysqli_real_escape_string($conn,$_POST['name']);
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$mobile = $_POST['mobile'];
	$location = $_POST['location'];
	$pass = md5($_POST['password']);
	$rpass = md5($_POST['rpassword']);
	

	$select = "SELECT * from userdata WHERE username = '$uname' && password = '$pass'";
	$result = mysqli_query($conn,$select);
	// code...

	if (mysqli_num_rows($result) > 0) {
		$error[] = 'user already exists!';
		// code...
	}
	else{
		if ($pass != $rpass) {
			$error[] = 'passwords do not match';
			// code...
		}
		else{
			$insert = "INSERT INTO userdata(name,email,phone,location,password)VALUES('$uname','$email','$mobile','$location','$password')";
			mysqli_query($conn,$insert);
			header('location:login.php');
		}
	}
}
?>