<?php
	session_start();
	// Database configuration 

	$sernamename = "localhost";
	$username    = "root";
	$passoword   = "";
	$databasename= "u710159267_tokendb";

	// Create database connection
	$con = mysqli_connect($sernamename, $username,$passoword,$databasename);

	// Check connection
	if ($con->connect_error) {
		die("Connection failed". $con->connect_error);
	}

?>