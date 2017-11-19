<?php

	$db_name = 'Advanced_Scripting_Class';
	$db_pass = '';
	$db_username = 'root';
	$db_servername = 'localhost';

	//Create connection
	$conn = mysqli_connect($db_servername, $db_username, $db_pass, $db_name);

	//Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	require_once("functions.php");
?>