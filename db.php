<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$databaseName = 'courier_db';

	// Create connection
	$conn = mysqli_connect($servername, $username, $password,$databaseName);

	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
	