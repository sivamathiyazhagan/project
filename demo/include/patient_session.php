<?php

include_once 'db.php';
 session_start();

if (empty($_SESSION['pid'])) {
	header("location:patient_login.php");

}
 $pid=$_SESSION['pid'];

 
?>