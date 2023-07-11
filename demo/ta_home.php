<?php
ob_start();
include "include/authority_session.php";
  include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>File Requested Files</title>
  
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
          <li class="active"><a href="ta_home.php">TA Home</a></li>
          <li><a href="authority_hcb_details.php">HCP Details</a></li>
          <li><a href="ta.home.php">File Request</a></li>
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
			<center><h1>FILE REQUEST</h1></center><br/>
              <div class="form-row pat_file_det_table">	
				<table border="2">
					<thead>
						<tr>
							<th> File Id </th>
							<th> File Name </th>							
							<th> Owner Name </th>
							<th> User Id </th>
							<th> User Name </th>							
							<th> Role </th>
							<th> Response </th>
						</tr>
					</thead>
					<tbody>
            <?php  $sql=mysqli_query($conn,"SELECT * FROM `request` where status=0");
            $n=0;
            while($row=mysqli_fetch_array($sql)){

                $fid=$row['fid'];
                $ffile=mysqli_query($conn,"SELECT * FROM `patient_file` where id=$fid");
                $file=mysqli_fetch_array($ffile);

                $pid=$row['pid'];
                $gpatient=mysqli_query($conn,"SELECT * FROM `patient` where id=$pid");
                $patient=mysqli_fetch_array($gpatient);

                $hid=$row['hid'];
                $gprovide=mysqli_query($conn,"SELECT * FROM `health_car_provider` where id=$hid");
                $provide=mysqli_fetch_array($gprovide);
             ?>
						<tr>
							<td><?php echo  $n;$n++ ?></td>
							<td><?php echo $file['fname'] ?></td>
							<td><?php echo $patient['name'] ?></td>
							<td><?php echo $hid ?></td>
							<td><?php echo $provide['name'] ?></td>
							<td><?php echo $provide['role'] ?></td>
							<td><a class="btn btn-success" href="reply_request.php?id=<?php echo $row['id']; ?>&&status=1&&hid=<?php echo $row['hid']; ?>">Accept</a>
              <a class="btn btn-danger" href="delete.php">delete</a></td>
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

  </main><!-- E
  nd #main -->

  <footer id="footer">
    
    <div class="container">
      <div class="copyright">
        &copy; Copyright. All Rights Reserved
      </div>
    </div>
  </footer>

</body>

</html>