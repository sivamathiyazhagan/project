<?php

include_once 'db.php';
 session_start();

if (empty($_SESSION['hid'])) {
	header("location:healthcare_provider_login.php");

}
 $hid=$_SESSION['hid'];

 
?>