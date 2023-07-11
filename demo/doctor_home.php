<?php
  ob_start();
  
session_start();
if (empty($_SESSION['pid'])) {
  header("location:doctor_login.php");
}
 $pid=$_SESSION['pid'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Patient Home</title>
  
  <!-- Vendor CSS Files -->
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
 
  <!-- Template Main CSS File -->
  <link href="css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-transparent">
    <div class="container d-flex align-items-center">


      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">Patient Home</a></li>
          <li><a href="patient_file_upload.php">File Upload</a></li>
          <li><a href="patient_file_details.php">File Details</a></li>
          <li><a href="index.php">Logout</a></li>
		 </ul>
      </nav>

    </div>
  </header>
  
  <section id="hero">
    <div class="hero-container" data-aos="fade-up">
      <h1> A secure g-cloud based framework for government health care services</h1>
    </div>
  </section>

  <footer id="footer">
    
    <div class="container">
      <div class="copyright">
        &copy; Copyright. All Rights Reserved
      </div>
    </div>
  </footer>

</body>

</html>