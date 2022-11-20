<?php
@include('config.php');
session_start();
//login connect
if(isset($_POST['login'])){
	
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$pass = md5($_POST['password']);
	

   $select = " SELECT * FROM userdata WHERE email = '$email' && password = '$pass' ";

   $res = mysqli_query($conn, $select);



   if(mysqli_num_rows($res) > 0){

      $row = mysqli_fetch_array($res);

      if($row['role'] == 1 && $row['status'] == 1){

         $_SESSION['admin_name'] = $row['name'];
         $_SESSION['user_email'] = $row['email'];
         
         header('location:admin/dashboard/index.php');


      }elseif($row['role'] == 2){

         $_SESSION['user_name'] = $row['name'];
         $_SESSION['user_email'] = $row['email'];
         
         if($row['status'] == 1){
          echo "welcome user";
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