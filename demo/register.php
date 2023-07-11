<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Register</title>
  
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
         <!-- <li class="drop-down"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="drop-down"><a href="#">Drop Down 2</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li>-->
          <li><a href="register.php">Register</a></li>

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
			<center><h1>REGISTRATION HERE </h1></center><br/>
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
			  
			  
			  <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="password" name="password" class="form-control" id="name" placeholder="Enter Your password"/>
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="date" class="form-control" name="dob" id="dob" placeholder="Date Of Birth" data-rule="dob" data-msg="Please enter date of birth" />
                  <div class="validate"></div>
                </div>
              </div>
			  
			   <div class="form-row">
                <div class="col-md-6 form-group">
                  <select class="form-control" name="gender" id="gender">
				  <option value="Gender">Gender</option>
				  <option value="male">Male</option>
				  <option value="female">Female</option>
				  
				</select>
                </div>
                
             
			  
                <div class="col-md-6 form-group">
                  <select class="form-control" name="state" id="state">
				  <option value="tamilnadu">Tamil Nadu</option>
				  <option value="kerala">Kerala</option>
				  <option value="Andra Pradesh">Andra Pradesh</option>
				  <option value="Karnataka">karnataka</option>
				  
				</select>
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-12 form-group">
                  <select class="form-control" name="blood" id="blood">
           <option value="O+">O+</option>
          <option value="O-">O-</option>
          <option value="A+">A+</option>
          <option value="A-">A-</option>
          <option value="others">Others</option>
          
        </select>
                </div>
               
              </div>
			  
			    <div class="form-row">
                <div class="col-md-12 form-group">
                  <select class="form-control" name="role" id="role">
				   <option value="Role">Role</option>
				  <option value="patient">Patient</option>
          <option value="docto">Doctor</option>
				  <option value="Health Care Provider">Health Care Provider</option>
				  <option value="EHR Cloud">EHR Cloud</option>
				  <option value="Authority">Authority</option>
				  
				</select>
                </div>
               
              </div>
			  
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
			  
              <div class="text-center"><button type="submit" name="register">Register</button></div>
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
include 'db.php';
  if (isset($_POST['register'])) {
    extract($_POST);
    $sql="INSERT INTO `register`(`name`, `email`, `password`, `dob`,`blood`, `gender`, `state`, `role`) VALUES ('$name','$email','$password','$dob','$blood',$gender','$state','$role')";
    if ($conn->query($sql) === TRUE) {
      echo "<script>alert('New Patient Registered successfully')</script>";
    }   
    else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
  }
?>