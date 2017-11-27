<head>

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="fhp_test.css">
<title>CIFC</title>
</head>

<!--Connect to database-->
<?php
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

//Set up query to add data to table
$query = "SELECT title, content, author, timestamp 
		  FROM post
		  ORDER BY timestamp DESC";
		  
//Run query//Run query
$result = $connection->query($query);

$formatCnt = 0;

?>

<body>

	<div id="banner-top">
		<img id="title-img" src="fhp_logo.png"></img>

	<!--Nav Bar and Dropdown menus-->
		<ul>
			<a href="fhp_home.html"><li>Home</li></a>
			
			<a href="fhp_institute.php"><li class="institute">Institute</li></a>
			
			<div class="dropdown">
				<li>Categories &#x25BC</li>
					<div class="dropdown-content">
						<a href="#">A</a>
						<a href="#">B</a>
						<a href="#">C</a>
						<a href="#">D</a>
						<a href="#">E</a>
						<a href="#">F</a>
						<a href="#">G</a>
						<a href="#">H</a>
						<a href="#">I</a>
					</div>
			</div>					
			
			<a href="fhp_contact.html"><li>Contact</li></a>	

			<div class="dropdown">
				<li>About &#x25BC</li>
					<div class="dropdown-content">
						<a href="fhp_about.html">Freedom's Hill Primer</a>
						<a href="fhp_about_institute.html">Institute</a>
					</div>
			</div>			
			
		</ul>	
	</div>
	
	<div id="top-banner">
		<h1 id="cifc-heading">Carolina Institute For Faith &amp Culture</h1>
	</div>
	
	

	
	
	<!--Article Preview Holder-->
	<div id="all-article-view">
	
		<!--Get articles and sort by date added-->
	<?php	
		//Read results
		while($article = $result->fetch_assoc()) { 	
	?>	
	
		<div id="article-preview-holder">	
				<!--image-->
				<img id="preview-img" src="img3.jpg"></img>
				<!--title and info-->
				
				<!--Title-->
				<div id="title-div">
					<h2 id="art-title">
						<?php echo $article['title'];?>
					</h2>
				</div>
					
				<div id="info-div">
					<!--Info-->
					<img id="tiny-icon"src="author_icon.png"></img>
					<h4 id="info-text"> 
					<?php echo $article['author'];?>
					</h4>
						&nbsp
					<img id="tiny-icon"src="time_icon.png"></img>
					<h4 id="info-text">
						<?php echo $article['timestamp'];?>
					</h4>
				</div>
			</div>
			
		<?php } ?>			
	</div>	


</body>

<!--
<footer>
	<a href="cifc_admin_login_form.html">Login</a>
</footer>-->

</html>