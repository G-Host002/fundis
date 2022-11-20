<?php
@include 'config.php';
@include 'includes/whatsappicon.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Fundis</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/fundis.png" rel="icon">
  <link href="assets/img/fundis.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Fundis - v4.9.1
  * Template URL: https://bootstrapmade.com/Fundis-free-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <a href="index.php"><img src="assets/img/flogo.png" alt="" class="img-fluid">Fundis</a>
        
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.php"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero"><i class="fa fa-home"></i> Home</a></li>
          <li><a class="nav-link scrollto" href="#about"><i class="fa fa-search"></i> Find</a></li>
          <li><a class="nav-link scrollto" href="userdash/dashboard/index.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
          
          <li><a class="nav-link scrollto" href="#team"><i class="fa fa-users"></i>Team</a></li>
          
          <li class="dropdown"><a href="#"><i class="fa fa-user"></i>Hi,<span><?php echo $_SESSION['user_name']?></span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                  <li><a href="#"><i class="fa fa-lock"></i>Change Password</a></li>
                  
              <li class="dropdown"><a href="#"><span><i class="fa fa-eye"></i>view account</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="userdash/dashboard/notice.php"><i class="fa fa-envelope"></i>Messages <span class="msg">5</span></a></li>
                  <li><a href="userdash/dashboard/user.php"><i class="fa fa-info"></i>Details</a></li>
                  
                  
                </ul>
              <li><a href="logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
              </li>
              
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="https://wa.me/254795899363"><i class="fa fa-whatsapp" ></i>Contact</a></li>
          <li><a class="nav-link scrollto" href="#pricing"><i class="fa fa-bell"></i><span class="msg">5</span></a></li>
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>
<style type="text/css">
  #header{
    height: 80px;
  }
  .navbar a{
    text-decoration: none;
  }
  .logo img{
    border-radius: 50%;
    width: 40px;
    height: 40px;
  }
  .msg{
    background-color: black;
    border-radius: 50%;
    color: white;
    width: 20px;
    height: 20px;

  }
  .navbar li a i{
    font-size: 18px;
  }
</style>
</html>