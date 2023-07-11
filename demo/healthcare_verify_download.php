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

  <title>G - Cloud</title>
  
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
            <form action="patient_home.php" method="post" role="form" class="php-email-form">
			<center><h1>FILE DETAILS</h1></center><br/>
              <div class="form-row pat_file_det_table">	
				<table border="2">
					<thead>
						<tr>
							<th> File Id </th>
							<th> File Name </th>							
							<th> Date & Time</th>							
							<th> Patient Name </th>							
							<th> Access Policy </th>
							<th> Download </th>
						</tr>
					</thead>
          <?php 
            $id=$_REQUEST['id'];
           $sql=mysqli_query($conn,"SELECT * FROM `request` where id=$id");
                $row=mysqli_fetch_array($sql); 

                $fid=$row['fid'];
                $ffile=mysqli_query($conn,"SELECT * FROM `patient_file` where id=$fid");
                $file=mysqli_fetch_array($ffile);

                $pid=$row['pid'];
                $gpatient=mysqli_query($conn,"SELECT * FROM `patient` where id=$pid");
                $patient=mysqli_fetch_array($gpatient);

                ?>
					<tbody>
						<tr>
							<td>1</td>
							<td><?php echo $file['fname'] ?></td>
							<td><?php echo $file['date'] ?></td>
							<td><?php echo $patient['name'] ?></td>							
							<td><?php echo $file['attribute'] ?></td>
							<td><a href="e_file/<?php echo $file['data']; ?>" download>click</a></td>
						</tr>
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