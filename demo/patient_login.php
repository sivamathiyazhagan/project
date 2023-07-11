<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Patient Login</title>
  
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
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="patient_login.php">Patient</a></li>
          <li><a href="doctor_login.php">Doctor</a></li>
          <li><a href="healthcare_provider_login.php">Health Care Provider</a></li>
          <li><a href="ehr_login.php">EHR Cloud</a></li>
          <li><a href="authority_login.php">Authority</a></li>
        

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
  <main id="main">

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="row" data-aos="fade-up" data-aos-delay="200">
			 
          <div class="col-lg-12">
            <form  method="post" role="form" class="php-email-form">
			<center><h1>PATIENTS LOGIN HERE </h1></center><br/>
			
              <div class="form-row">
			  
				<div class="col-lg-3">
				</div>
				
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
				<div class="col-lg-3">
				</div>
				
              </div>
			  
			  
			  <div class="form-row">
			  <div class="col-lg-3">
				</div>
				
                <div class="col-md-6 form-group">
                  <input type="password" name="password" class="form-control" id="name" placeholder="Enter Your password"/>
                  <div class="validate"></div>
                </div>
				<div class="col-lg-3">
				</div>
              </div>
              <div class="text-center">
				  <button type="submit"><a href="patient_reg.php" style="color:white">Sign Up? </a></button>
				  <button type="submit" name="login">Log in</button>
			  </div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    
    <div class="container">
      <div class="copyright">
        &copy; Copyright All Rights Reserved
      </div>
    </div>
  </footer>
</body>

</html>


<?php
include_once 'db.php';
if (isset($_POST['login'])) {
  extract($_POST);

  $query=mysqli_query($conn,"SELECT * FROM patient WHERE name = '$name' AND pwd = '$password' ");
$n=mysqli_num_rows($query);
          
            if ($n > 0)
            {
                
              $row=mysqli_fetch_array($query);
              session_start();
              $_SESSION['pid']=$row['id'];
              
              header("location:patient_home.php");
            }
            else{
              echo "<script>
                  alert('invalid login');
                </script>";
            }
          }
?>

