<?php

include_once 'db.php';
 session_start();

if (empty($_SESSION['eid'])) {
	header("ehr_login.php");

}
 $eid=$_SESSION['eid'];

 
?>