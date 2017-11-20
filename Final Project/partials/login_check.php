<?php 
	/*
	* Name: Cameron Cromer
	* Date: Nov. 19, 2017
	* Purpose: where ADMIN, EDITOR, and AUTHOR all land on login. this is the mainhub and nav for the backend
	*/

	session_start();

	//Kick the user out to home if not logged in
	if(!$_SESSION['account']){
		header("Location: fhp_home.php");
	}
	require_once('connect.php');
?>