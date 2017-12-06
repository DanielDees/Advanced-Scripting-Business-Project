<?php
	//Database configuration
	$db_name = 'id3480846_cifc_db';
	$db_pass = 'mydb365';
	$db_username = 'id3480846_cifc123';
	$db_servername = 'localhost';

	//Create connection
	$conn = mysqli_connect($db_servername, $db_username, $db_pass, $db_name);

	//Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	require_once("functions.php");
?>