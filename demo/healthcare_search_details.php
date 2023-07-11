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

  <title>Health care Search Details</title>
  
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
         <!-- <li><a href="healthcare_accessfile.php">Access File</a></li>-->
          <li><a href="logout.php">Logout</a></li>
		 </ul>
      </nav>

    </div>
  </header>
 <?php 
        $select1 =mysqli_query($conn,"select * from  health_car_provider where id=$hid"); 
        $fetch1=mysqli_fetch_array($select1);
        $attribute=$fetch1['role'];

        $select =mysqli_query($conn,"select * from  patient_file where attribute='$attribute'"); 
        
  ?>
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
							<th> Owner Id</th>
							<th> Owner Name </th>							
							<th> Access Policy </th>
							<th> Request </th>
						</tr>
					</thead>
					<tbody> 
            <?php
              $n=1;
              while ($row=mysqli_fetch_array($select)) {

                $id=$row['id'];
                $pid=$row['pid'];
                $patient=mysqli_query($conn,"select * from  patient where id='$pid'");
                $fpatient=mysqli_fetch_array($patient);

                $req=mysqli_query($conn,"select * from  request where fid='$id' && hid=$hid");
                $r=mysqli_num_rows($req);

               

            ?>
						<tr>
							<td><?php echo $n;$n++; ?></td>
							<td><?php echo $row['fname'];?></td>
							<td><?php echo $row['date'];?></td>
							<td><?php echo $row['pid'];?></td>
							<td><?php echo $fpatient['name'];?></td>
							<td><?php echo  $row['attribute'];?></td>
							<td>
                <?php if ($r>0) {
                  
                  ?>Request Sent
                     <?php }else{
                      ?><a href="send_request.php?pid=<?php echo $row['pid'];?>&&fid=<?php echo $row['id'];?>">Send</a><?php
                     } ?>
               </td>
						</tr><?php } ?>
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