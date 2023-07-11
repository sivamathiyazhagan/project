<?php
ob_start();
include "include/patient_session.php";
include_once 'db.php';

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
           <form style="background: white;padding:10px" method="post" action="crypt.php" enctype="multipart/form-data" >
			<center><h1>PHR UPLOAD WITH ATTRIBUTE </h1></center><br/>
      <?php $select=mysqli_query($conn,"select * from patient_file order by id desc");
            $fetch=mysqli_fetch_array($select);
       ?>
			       <table class="table table-bordered" >
                <tr>
                  <th>File Name</th>
                  <th>Date & Time</th>
                  <th>Access Policy</th>
                  <th>File</th>
                </tr>  
                <tr>
                  <td><?php echo $fetch['fname'] ?></td>
                   <td><?php echo $fetch['date'] ?></td>
                    <td><?php echo $fetch['attribute'] ?></td>
                    <td><?php echo $fetch['data'] ?></td>
                </tr> 
             </table>
			
			
              <div class="form-row row">			  
				        <div class="col-lg-3">
                </div>
                <div class=" col-lg-6 form-group  ">

                  <input style="float:right;" type="file" name="file" class="form-control" id="file" placeholder=" Upload Your File "/>
                  <div class="validate"></div>
                </div>
				<div class="col-lg-3">
				</div>				
              </div>
			  
              <div class="text-center">
				  <button type="submit" class="btn btn-success" name="upload">Upload</button>
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

?>