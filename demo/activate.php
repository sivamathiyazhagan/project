<?php
	include 'db.php';
	$id=$_REQUEST['id'];
	 $status1=$_REQUEST['status'];

	if ($status1==1) {
		// echo "<script>alert('reject')</script>";
		$sql=mysqli_query($conn,"update health_car_provider set status=1 where id='$id' ");
		 header("location:authority_hcb_details.php");
	}
	// 	elseif ($status='approve') {
	// 	 echo "<script>alert('approve')</script>";
	// $sql=mysqli_query($conn,"update register set status='Approved' where id='$id' ");
	// 	//header("location:cloud_view_authorize.php");
	// }
	else
	{
		$sql=mysqli_query($conn,"update health_car_provider set status=2 where id='$id' ");
		
		 header("location:authority_hcb_details.php");
	}
?>