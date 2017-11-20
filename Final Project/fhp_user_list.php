<html>
<head>
	<?php
		/*
		*Name: Cameron Cromer
		*Date: Nov. 19, 2017
		*Purpose: to list all users. ADMIN only. ADMIN can delete users here
		*/
		session_start();
		if ($_SESSION['account'] != "admin") {
			header("Location: fhp_home.php");
			exit();
		}
	    require_once('connect.php');
	?>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="fhp_test.css">
	<link rel="stylesheet" href="bootstrap.min.css">
<title>FHP About</title>
</head>
<body>
	<?php 
		require_once('partials/nav_default.php'); 
	?>
<main>
	<div id="div-section-holder">
		<h1 id="section-name">Users</h1>
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
		                  $query = query("DELETE FROM Users where id=$id");
		                  confirm($query);
		                  redirect("fhp_user_list.php");
		                }
		            }
					get_users();           
				?>
			</div>
		</div>
	</div>
	<?php 
		require_once('partials/tinymc_footer.php'); 
	?>
</main>
</html>