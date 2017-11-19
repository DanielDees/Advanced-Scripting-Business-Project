<html>
<?php 
/*
*Name: Cameron Cromer
*Date: Nov. 19, 2017
*Purpose: where ADMIN, EDITOR, and AUTHOR all land on login. this is the mainhub and nav for the backend
*/
session_start();
if(!$_SESSION['account']){
	header("Location: fhp_home.php");
}
require_once('connect.php');
?>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="fhp_test.css">
<link rel="stylesheet" href="bootstrap.min.css">
<title>FHP Dashboard</title>
</head>

<body>

	<div id="banner-top">
		<img id="title-img" src="fhp_logo.png"></img>

		<ul>
			<a href="fhp_home.php"><li>Home</li></a>
			
			<a href="fhp_institute.html"><li>Institute</li></a>
			
			<a href="#"><li>Contact</li></a>
						
			<div class="dropdown">
				<li>About &#x25BC</li>
					<div class="dropdown-content">
						<a href="fhp_about.html">Freedom's Hill Primer</a>
						<a href="fhp_about_institute.html">Institute</a>
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
	


<script type="text/javascript" src="jquery/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="tinymce/tinymce.min.js"></script>
<script type="text/javascript" src="tinymce/tinymceinit-100.js"></script>
<script type="text/javascript" src="tinymce/tinymceinit-200.js"></script>
<script type="text/javascript" src="tinymce/tinymceinit-300.js"></script>
</body>
</html>