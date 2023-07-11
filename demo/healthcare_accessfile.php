<?php
ob_start();
include "include/healthcare_provider_session.php";
include_once 'db.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Health care Provider Access File</title>
  
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
          <li class="active"><a href="healthcare_home.php">User Home</a></li>
          <li><a href="healthcare_search_details.php">Search File</a></li>
         <!-- <li><a href="healthcare_accessfile.php">Access File</a></li>-->
          <li><a href="index.php">Logout</a></li>
		 </ul>
      </nav>

    </div>
  </header>
  
  <main id="main">

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="row" data-aos="fade-up" data-aos-delay="200">
			 
          <div class="col-lg-12">
            <form action="#" method="post" role="form" class="php-email-form">
			
              <div class="form-row">
			  
				<div class="col-lg-3">
				</div>
				
                <div class="col-md-6 form-group">
                  <input type="text" name="sec" class="form-control" id="name" placeholder="Enter Secret Key"   />
                  <div class="validate"></div>
                </div>
				<div class="col-lg-3">
				</div>
				
              </div>
			  
			  
			  
              <div class="text-center">				 
				  <button type="submit" name="s1">Verify</button>
			  </div>
            </form>
            <?php 

              if (isset($_POST['s1'])) {
                extract($_POST);

                $sql=mysqli_query($conn,"SELECT * FROM `request` where status=1 and hid=$hid and sec='$sec'");


                if (mysqli_num_rows($sql)>0) {
                   $fetch=mysqli_fetch_array($sql);
                   $id=$fetch['id'];
                    echo "<script>alert('Verified!');

                      window.location.href='healthcare_verify_download.php?id=$id';
                    </script>";
                }else{
                  echo "<script>alert('Invalid!');
                      
                    </script>";
                }
              }
             ?>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <footer id="footer">
    
    <div class="container">
      <div class="copyright">
        &copy; Copyright. All Rights Reserved
      </div>
    </div>
  </footer>

</body>

</html>