<?php
@include('config.php');
session_start();

if(isset($_POST['submit'])){
  $name = mysqli_real_escape_string($conn,$_POST['name']);
  $email = mysqli_real_escape_string($conn,$_POST['email']);
  $subject = $_POST['subject'];
  $msg = $_POST['message'];

  $insert = "INSERT INTO contactus(name,email,subject,message)VALUES('$name','$email','$subject','$msg')";
  $res = mysqli_query($conn,$insert);

  if($res){
    echo "data saved";
  }
  else{
    echo "data wrong";
  }
}
else{
  echo 'db connection failed';
  }

?>