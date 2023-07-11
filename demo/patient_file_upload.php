<?php
ob_start();
include "include/patient_session.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Patient file upload</title>
  
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
  <main id="main">

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="row" data-aos="fade-up" data-aos-delay="200">
			 
          <div class="col-lg-12">
            <form method="post" role="form" class="php-email-form" enctype="multipart/form-data">
			<center><h1>PHR UPLOAD WITH ATTRIBUTE </h1></center><br/>
			
              <div class="form-row">			  
				<div class="col-lg-3">
				</div>
				
                <div class="col-md-6 form-group">
                  <input type="text" name="fname" class="form-control" id="name" placeholder=" Enter Your File Name"/>
                  <div class="validate"></div>
                </div>
				<div class="col-lg-3">
				</div>				
              </div>
			  
			  
			  <div class="form-row">
			  <div class="col-lg-3">
				</div>
				
                <div class="col-md-6 form-group">
                  <select class="form-control" name="attribute" id="state">
				  <option>Access Attribute</option>
				  <option value="Hospital">Hospital</option>
				  <option value="Dentist">Dentist</option>
				  <option value="Surgeon">Surgeon</option>
				  <option value="Insurance">Insurance</option>
				  
				</select>
                  <div class="validate"></div>
                </div>
				<div class="col-lg-3">
				</div>
              </div>
			  
			   <div class="form-row">			  
				<div class="col-lg-3">
				</div>
				
                <div class="col-md-6 form-group">
                  <input type="file" name="data" class="form-control" id="file" placeholder=" Upload Your File "/>
                  <div class="validate"></div>
                </div>
				<div class="col-lg-3">
				</div>				
              </div>
			  
              <div class="text-center">
				  <button type="submit" name="upload">Upload</button>
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

<?php
include_once 'db.php';
if (isset($_POST['upload'])) {
  extract($_POST);
  date_default_timezone_set("Asia/Kolkata");
  $date=date('d-m-y h:i:s');


  $data=$_FILES['data']['name'];
  $move=move_uploaded_file($_FILES['data']['tmp_name'],"file/".$data);

  $sql=mysqli_query($conn,"INSERT INTO `patient_file`(`fname`, `attribute`, `pid`, `data`, `date`) VALUES ('$fname','$attribute','$pid','$data','$date')");

  if ($sql) {
    
      echo "<script>alert('New file inserted successfully')</script>";
      header("location:patient_file_upload1.php");
    }   
    else {
     
  }

}

?>