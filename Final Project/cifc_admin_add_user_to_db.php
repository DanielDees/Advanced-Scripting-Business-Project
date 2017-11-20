<?php
    // Author:      Dylan Porter
    // Date:        11/16/2017
    // Purpose:     Add a user to the database
    // TODO: change POST variables to match the form
    // TODO: redirect page to the correct place
    // TODO: add error catching for matching passwords and valid inputs
  
	//Connect to database
	
	//Database connection variables
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db = "cifc_db";

	//Set up connection
	$conn = new mysqli($servername, $username, $password, $db);

	//Attempt to establish connection
	if ($conn->connect_error) {
		die("Connection failed: " . $connection->connect_error);
	} 
    
    // grab all posted variables
    $firstname = $_POST['user-fname'];
    $lastname = $_POST['user-lname'];
    $email = $_POST['user-email'];
    $username = $_POST['user-username'];
    $password = $_POST['user-password'];
    $repassword = $_POST['user-re-password'];
    $account = $_POST['user-type'];
    
    // sanitize user input
    $firstname = trim($firstname);
    $lastname = trim($lastname);
    $email = trim($email);
    $username = trim($username);
    $password = trim($password);
    $repassword = trim($repassword);
    $account = trim($account);
    
    $firstname = mysqli_real_escape_string($conn, $firstname);
    $lastname = mysqli_real_escape_string($conn, $lastname);
    $email = mysqli_real_escape_string($conn, $email);
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);
    $repassword = mysqli_real_escape_string($conn, $repassword);
    $account = mysqli_real_escape_string($conn, $account);
    $salt = strtoupper(bin2hex(random_bytes(20)));
    
    // update database with the new user information
    $sql = 'INSERT INTO users (Id, first_name, last_name, email, username, account_type)
        VALUES (NULL, "' . $firstname . '", "' . $lastname . '", "' . $email . '", "' . $username . '", "' . strtoupper($account) . '")';
    
    $result = $conn->query($sql);
    
    $sql = 'INSERT INTO logins (id, username, password_hash, password_salt)
        VALUES (NULL, "' . $username . '", PASSWORD("' . $password . '"), "' . $salt . '" )';
    
    $result = $conn->query($sql);
    
    mysqli_close($conn);
    
    //header("Location: REDIRECT");
?>

<html>
	<meta http-equiv="refresh" content="0;url=cifc_admin_dashboard.php" />
</html>