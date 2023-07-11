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

  <title>Search File</title>
  
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
          <!--<li><a href="healthcare_accessfile.php">Access File</a></li>-->
          <li><a href="index.php">Logout</a></li>
     </ul>
      </nav>

    </div>
  </header>
  <?php $select =mysqli_query($conn,"select * from  health_car_provider where id=$hid"); 
        $fetch=mysqli_fetch_array($select);
  ?>
  <main id="main">

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="row" data-aos="fade-up" data-aos-delay="200">
       
          <div class="col-lg-12">
            <form action="#" method="post" role="form" class="php-email-form">
      
              <div class="form-row">
        
        <div class="col-lg-4">
        </div>
        
                <div class="col-md-4 form-group">
                 
                  <div class="validate"></div>
                  <label>Name:</label><input type="text" name="" value="<?php echo $fetch['name']; ?>" class="form-control"><br>
                  <label>Attribute:</label><input type="text" name="" value="<?php echo $fetch['role']; ?>"  class="form-control">
                </div>
        <div class="col-lg-3">
        </div>
        
              </div>
        
        
        
              <div class="text-center">        
          <a class="btn btn-success" href="healthcare_search_details.php" >Search</a>
        </div>
            </form>
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