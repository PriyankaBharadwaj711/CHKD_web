<?php
	$servername = "localhost";
	$username = "admin";
	$password = "monarchs";
	$dbname = "CHKD_Web_Dev";

	// $servername = "handson-mysql";
	// $username = "kumar";
	// $password = "kumar";
	// $dbname = "CHKD_Web_Dev";

	// $servername = "handson-mysql";
	// $username = "kumar";
	// $password = "kumar";
	// $dbname = "=";

	//Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	//Check connection
	if ($conn->connect_error) {
    	die("Hi Dev Team your DB Connection for Patient details failed: " . $conn->connect_error);
	}
