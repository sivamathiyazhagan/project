<?php
ob_start();
include "include/healthcare_provider_session.php";
include_once 'db.php';

$fid=$_REQUEST['fid'];
$pid=$_REQUEST['pid'];

	date_default_timezone_set("Asia/Kolkata");   //India time (GMT+5:30)
	$date=date('d-m-Y H:i:s');

	$insert=mysqli_query($conn,"insert into request (pid,fid,date,hid)values($pid,$fid,'$date',$hid)");
	if ($insert) {
		echo "<script>alert('Request Sent!');
		window.location.href='healthcare_search_details.php';
		</script>";
	}else{
		echo "<script>alert('Request Failed!');
			window.location.href='healthcare_search_details.php';
		</script>";
	}
?>