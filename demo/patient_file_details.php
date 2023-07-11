
<?php
ob_start();
include "include/patient_session.php";
  include 'db.php';
?>
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
            <form  method="post" role="form" class="php-email-form">
			<center><h1>FILE DETAILS</h1></center><br/>
			
              <div class="form-row pat_file_det_table">			  
				
				<table border="2">
				
					<thead>
						<tr>
							<th> File Id </th>
							<th> File Name </th>
							<th> Date & Time </th>
							<th> Patient Id </th>
							<th> Patient Name </th>
							<th> Access Policy </th>
						</tr>
					</thead>
          <tbody>
					<?php
        
            $select=mysqli_query($conn,"select * from patient_file where pid=$pid");
          $select1=mysqli_query($conn,"select * from patient where id=$pid");
             $fetch1=mysqli_fetch_array($select1);

          $n=1;

          while ($fetch=mysqli_fetch_array($select)) {
            
          ?>
					
						<tr>
							<td><?php echo $n;$n++; ?></td>
							<td><?php echo $fetch['fname']; ?></td>
							<td><?php echo $fetch['date']; ?></td>
							<td><?php echo $fetch['pid']; ?></td>
							<td><?php echo $fetch1['name']; ?></td>
							<td><?php echo $fetch['attribute']; ?></td>
						</tr>
            <?php } ?>
					</tbody>
					
				</table>
      
				
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