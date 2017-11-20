<?php
session_start();

//Get Post data from prevoius page
$title = $_POST["art_title"];
$content = $_POST["art_content"];
$author = $_SESSION["firstname"] . " " . $_SESSION["lastname"];

//Connect to database

//Database connection variables
$servername = "localhost";
$username = "root";
$password = "";
$db = "cifc_db";

//Set up connection
$connection = new mysqli($servername, $username, $password, $db);

//Attempt to establish connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
} 

$query = "INSERT INTO post (title, content, author)
		  VALUES ('$title', '$content', '$author')";

//Add to database
if ($connection->query($query) === TRUE) {
}
else {
    echo "Error: " . $query . "<br>" . "<br>" . $connection->error;
}

?>

<html>
	<meta http-equiv="refresh" content="0;url=cifc_admin_dashboard.php" />
</html>