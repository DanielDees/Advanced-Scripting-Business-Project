<html>
<head>
	<?php 
		require_once('partials/login_check.php'); 
	?>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="fhp_test.css">
	<link rel="stylesheet" href="bootstrap.min.css">
	<title>FHP Dashboard</title>
</head>

<body>

	<div id="banner-top">
		<img id="title-img" src="images/fhp_logo.png"></img>
		<ul>
			<a href="fhp_home.php"><li>Home</li></a>
			<a href="fhp_institute.php"><li>Institute</li></a>
			<a href="#"><li>Contact</li></a>
						
			<div class="dropdown">
				<li>About &#x25BC</li>
					<div class="dropdown-content">
						<a href="fhp_about.php">Freedom's Hill Primer</a>
						<a href="fhp_about_institute.php">Institute</a>
					</div>
			</div>
			<?php 
				if($_SESSION['account'] != null){
					echo "<a href=\"dashboard.php\"><li class=\"dashboard\">Dashboard</li></a>"; 
					echo "<a href=\"logout.php\"><li>Logout</li></a>"; 
				}
			?> 									
		</ul>
	</div>

	<?php 
		//var_dump($_SESSION);
		if($_SESSION['account'] == "admin"){
			get_admin();
		}
		if($_SESSION['account'] == "editor"){
			get_editor();
		}
		if($_SESSION['account'] == "author"){
			get_author();
		}
	?>

	<?php 
		require_once('partials/tinymc_footer.php'); 
	?>
</body>
</html>