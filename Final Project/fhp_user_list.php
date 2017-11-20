<html>

<head>
<?php
/*
*Name: Cameron Cromer
*Date: Nov. 19, 2017
*Purpose: to list all users. ADMIN only. ADMIN can delete users here
*/
session_start();
if($_SESSION['account'] != "admin"){
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

		<div id="banner-top">
		<img id="title-img" src="fhp_logo.png"></img>

		<ul>
			<a href="fhp_home.html"><li>Home</li></a>
			
			<a href="fhp_institute.php"><li>Institute</li></a>
			
			<a href="#"><li>Contact</li></a>
						
			<div class="dropdown">
				<li class="about">About &#x25BC</li>
					<div class="dropdown-content">
						<a href="fhp_about.html">Freedom's Hill Primer</a>
						<a href="fhp_about_institute.html">Institute</a>
					</div>
			</div> 									
		</ul>
	</div>
	
<main>
<div id="div-section-holder">
	<h1 id="section-name">Articles</h1>
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
<script type="text/javascript" src="jquery/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="tinymce/tinymce.min.js"></script>
<script type="text/javascript" src="tinymce/tinymceinit-100.js"></script>
<script type="text/javascript" src="tinymce/tinymceinit-200.js"></script>
<script type="text/javascript" src="tinymce/tinymceinit-300.js"></script>

</main>
</html>