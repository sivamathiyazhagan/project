<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>HCB Details</title>
  
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
          <li class="active"><a href="authority_home.php">TA Home</a></li>
          <li><a href="authority_hcb_details.php">HCB Details</a></li>
          <li><a href="ta_home.php">File Request</a></li>
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
			<center><h1>HCB DETAILS</h1></center><br/>
              <div class="form-row pat_file_det_table">	
				<table border="2">
					<thead>
						<tr>
							<th> UId </th>
							<th> User Name </th>
							
							<th> Email</th>
							<th> Role</th>
							<th> State </th>
							
							<th> Status </th>
							<th> Activate </th>
						</tr>
					</thead>
          <?php
            include 'db.php';
            $sql=mysqli_query($conn,"SELECT * FROM `health_car_provider`
");
            while($row=mysqli_fetch_array($sql)){
          ?>
          <tbody>
            <tr>
              <td><?php echo $row['id'];?></td>
              <td><?php echo $row['name'];?></td>
              <td><?php echo $row['email'];?></td>
              <td><?php echo $row['role'];?></td>             
              <td><?php echo $row['state'];?></td>
              <td><?php if($row['status']==1){ echo 'Accepted'; }elseif ($row['status']==2) {
               echo "Rejected";
              }else{ echo "Waiting"; } ?></td>
              <td><a href="activate.php?id=<?php echo $row['id']?>&&status=1" class="btn btn-success"> Accepted </a>&nbsp;&nbsp;&nbsp;<a href="activate.php?id=<?php echo $row['id']?>&&status=2" class="btn btn-warning">Rejected</a></td>
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