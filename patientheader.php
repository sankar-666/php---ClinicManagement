<?php include 'connection.php';
extract($_GET)
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Bootslander Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/download.jpg" rel="icon">
  <link href="assets/img/macro.png" rel="macro">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

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
  * Template Name: Bootslander - v4.9.1
  * Template URL: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-danger" style="background-color: black;">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo" style="display: flex;">
        <img src="assets/img/download.png" style="background:black !important; border-radius: 50px;margin-right: 5px;">
        <h1 style="position: relative;top: 8px;"><a href="patienthome.php"><span>Eye Care</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="patienthome.php">Home</a></li>
<li class="dropdown"><a href="#"><span>View</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
  <li><a class="nav-link scrollto " href="patientviewtimings.php"> Available Timings</a></li>
          <li><a class="nav-link scrollto " href="patientviewtestreport.php"> Test Report</a></li>
          <li><a class="nav-link scrollto " href="patientmedicinedetails.php"> Medicine Details</a></li>            </ul>
          </li>


          <li><a class="nav-link scrollto " href="patientmybookings.php">My Bookings</a></li>
          <li><a class="nav-link scrollto " href="patientcomplaints.php">Compaint</a></li>
  
          <li><a class="nav-link scrollto" href="index.php">LogOut</a></li>
        
         
       
         
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->


      </div>
  </header><!-- End Header -->
