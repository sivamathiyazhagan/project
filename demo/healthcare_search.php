<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Health care</title>
  
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
          <li><a href="healthcare_accessfile.php">Access File</a></li>
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
			<center><h1>FILE ACCESS WITH ATTRIBUTE</h1></center><br/>
			
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
                  <select class="form-control" name="Role" id="role">
				   <option value="Role">Role</option>
				  <option value="Insurance">Insurance</option>
				  <option value="Health Care Provider">Health Care Provider</option>
				  <option value="EHR Cloud">EHR Cloud</option>
				  <option value="Authority">Authority</option>
				  
				</select>
                  <div class="validate"></div>
                </div>
				<div class="col-lg-3">
				</div>
              </div>
              <div class="text-center">				 
				  <button type="submit"><a href="healthcare_search_details.php" style="color:white">Search</a></button>
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