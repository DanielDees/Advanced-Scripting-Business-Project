<html>
<head>
	<?php
		/*
		* Name: Cameron Cromer
		* Date: Nov. 19, 2017
		* Purpose: to list all categories. EDITOR AND ADMIN ONLY, can delete categories here
		*/
		session_start();
		if($_SESSION['account'] == "" || $_SESSION['account'] == "author"){
			header("Location: fhp_home.php");
			exit();
	}
    require_once('connect.php');
?>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="fhp_test.css">
<link rel="stylesheet" href="bootstrap.min.css">
<title>FHP Category</title>
</head>

<body>

		<div id="banner-top">
		<img id="title-img" src="images/fhp_logo.png"></img>

		<ul>
			<a href="fhp_home.php"><li>Home</li></a>
			<a href="fhp_institute.php"><li>Institute</li></a>
			<a href="#"><li>Contact</li></a>
						
			<div class="dropdown">
				<li class="about">About &#x25BC</li>
					<div class="dropdown-content">
						<a href="fhp_about.php">Freedom's Hill Primer</a>
						<a href="fhp_about_institute.php">Institute</a>
					</div>
			</div> 									
		</ul>
	</div>
	
<main>
	<div id="div-section-holder">
		<h1 id="section-name">Category</h1>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<?php
					if(isset($_GET['active']))//checks for active change
		            {
		                if($_GET['active'] == 2) //deletes the article
		                {
		                  $active = $_GET['active'];
		                  $id = $_GET['id'];
		                  $query = query("DELETE FROM categories where id=$id");
		                  confirm($query);
		                  redirect("fhp_category_list.php");
		                }
		            }
					get_category_list();           
				?>
			</div>
		</div>
	</div>
	<?php 
		require_once('partials/tinymc_footer.php'); 
	?>
</main>
</html>