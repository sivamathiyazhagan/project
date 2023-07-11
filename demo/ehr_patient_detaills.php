<?php
ob_start();
include "include/ehr_session.php";
include_once 'db.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>EHR Patient Details</title>
  
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
          <li class="active"><a href="ehr_home.php">CLoud home</a></li>
          <li><a href="ehr_file_details.php">File Details</a></li>
          <li><a href="ehr_patient_detaills.php">Patient Details</a></li>
          <li><a href="ehr_hcb_details.php">HCP Details</a></li>
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
            <form action="patient_home.php" method="post" role="form" class="php-email-form">
			<center><h1>PATIENT DETAILS</h1></center><br/>
              <div class="form-row pat_file_det_table">	
				<table border="2">
					<thead>
						<tr>
							<th> OID </th>
							<th> Patient Name </th>							
							<th> Email</th>	
      				
							<th> State</th>							
							<th> Country</th>  
              <th> Blood group</th>		
						</tr>
					</thead>
          <?php 
            include 'db.php';
            $sql=mysqli_query($conn,"select * from patient");
            while($row=mysqli_fetch_array($sql)){
          ?>
					<tbody>
						<tr>
							<td><?php echo $row['id'];?></td>
							<td><?php echo $row['name'];?></td>
							<td><?php echo $row['email']; ?></td>
							<td><?php echo $row['state'];?></td>					
							<td><?php echo $row['country'];?></td>
              <td><?php echo $row['blood group'];?></td>
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

  </main>
  <footer id="footer">
    
    <div class="container">
      <div class="copyright">
        &copy; Copyright. All Rights Reserved
      </div>
    </div>
  </footer>

</body>

</html>