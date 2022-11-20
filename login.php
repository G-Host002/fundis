<?php
@include 'config.php';
@include('includes/whatsappicon.php');
session_start();



//link to register form
if (isset($_POST['register'])) {
	$uname = mysqli_real_escape_string($conn,$_POST['name']);
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$mobile = $_POST['phone'];
	$location = $_POST['location'];
	$pass = md5($_POST['password']);
	$rpass = md5($_POST['rpassword']);
	$role = $_POST['role'];
	

	$select = "SELECT * from userdata WHERE name = '$uname' && password = '$pass'";
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
			$insert = "INSERT INTO userdata(name,email,phone,location,password,role)VALUES('$uname','$email','$mobile','$location','$pass','$role')";
			mysqli_query($conn,$insert);
			$error = 'data saved';
			header('location:login.php');
		}
	}
}

//login connect
if(isset($_POST['login'])){
	
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$pass = md5($_POST['password']);
	
	

   $select = " SELECT * FROM userdata WHERE email = '$email' && password = '$pass' ";

   $res = mysqli_query($conn, $select);



   if(mysqli_num_rows($res) > 0){

      $row = mysqli_fetch_array($res);

      if($row['role'] == 'technician' && $row['status'] == 1){

         $_SESSION['tech_name'] = $row['name'];
         $_SESSION['tech_email'] = $row['email'];
         $_SESSION['tech_phone'] = $row['phone'];
         $_SESSION['tech_location'] = $row['location'];
         $_SESSION['tech_pass'] = $row['password'];
         
         header('location:technician.php');


      }elseif($row['role'] == 'user'){

         $_SESSION['user_name'] = $row['name'];
         $_SESSION['user_email'] = $row['email'];
         
         if($row['status'] == 1){
          header('location:userpage.php');
         }
         else{
          $error[] = 'user offlined';
         }
         
        

      }
     
   }else{
      $error[] = 'incorrect email or password!';
   }

};
?>

<!-- partial:index.partial.html -->
<!DOCTYPE html>
<html>
<head>
	<title>Login/Register</title>
	<link rel="stylesheet" type="text/css" href="assets/css/loginstyle.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
<link href="assets/img/fundis.png" rel="icon">


  <link href="assets/img/fundis.png" rel="apple-touch-icon">
</head>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup" id="sup">
				<form action="" method="post">
					<label for="chk" aria-hidden="true" id="sname">Sign up</label>
					<input type="text" name="name" placeholder="User name" required="">
					<input type="email" name="email" placeholder="Email" required="">
					<input type="text" name="phone" placeholder="Phone" required="">
					<input type="text" name="location" placeholder="Location" required="">
					<input type="password" name="password" placeholder="Password" required="">
					<input type="password" name="rpassword" placeholder="repeat Password" required="">
					<select name="role">
						<option for = "role" value="">--register as--</option>
					<?php
					$cn=0;
					$select = "SELECT * FROM roles";
					$sel = mysqli_query($conn,$select);
					
					
					while ($row = $sel->fetch_assoc()) {
						// code...
						$cn++;
						
						?>
					
					
						<option for="role"><?php print $row["role"]?></option>
					<?php } ?>
						
					</select>
					
					
					<button name="register">Sign up</button>
				</form>
			</div>


			<div class="login">
				<form action="" method="post">
					<label for="chk" aria-hidden="true">Login</label>
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="password" placeholder="Password" required="">
					<button name="login">Login</button>
					<a href="index.php">Back Home</a>

				</form>
			</div>
	</div>
	<h4> <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<script> type="text/javascript">
				
					alert("'.$error.'");
				
			</script>';
         };
      };
      ?></h4>
</body>

</html>
<!-- partial -->
  
</body>
<style type="text/css">
	#sup label{
		margin-bottom: 2rem;

	}
	.login a{
		align-items: center;
		text-align: center;

	}
	#sname{
		margin-top: 2rem;
	}
	.main{
		height: 700px;
	}
	select{
		width: 60%;
	height: 40px;
	background: #e0dede;
	justify-content: center;
	display: flex;
	margin: 20px auto;
	padding: 10px;
	border: none;
	outline: none;
	border-radius: 5px;
	}
	select option{
		font-family: sans-serif;
		font-size: 14px;
	}
	option{
		color: black;
	}

</style>
</html>
