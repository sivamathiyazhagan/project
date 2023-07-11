<?php
	$conn= new mysqli("localhost","root","","gov_health_care"); 
	if ($conn->connect_error) {
  		die("Connection failed: " . $conn->connect_error);
	}
?>