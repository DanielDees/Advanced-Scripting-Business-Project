<?php
session_start();

if(!isset($_SESSION["firstname"])) {
	header("Location: cifc_admin_login_form.html");
}
?>

<html>

<meta name="viewport" content="width=device-width, initial-scale=1">

<head>
<link rel="stylesheet" href="fhp_test.css">
<title>CIFC Admin</title>
</head>

<body>	

	<div id="banner-top">
		<img id="title-img" src="fhp_logo.png"></img>
		
		<h2 id="admin-subtitle">Administration:
			<?php 
			if($_SESSION["account"] == "author") {
				echo " Author";
			}
			
			else if($_SESSION["account"] == "editor") {
				echo " Editor";
			}
			
			else if($_SESSION["account"] == "publisher") {
				echo " Publisher";
			}
			?>
		</h2>

		<ul>
			<!--Dashboard Tab-->
			<a href="cifc_admin_dashboard.php"><li class="dashboard">Dashboard</li></a>	
			<!--Articles Tab
			<a href="cifc_admin_article_view.php"><li>Articles</li></a>
			<!--Users Tab
			<a href="cifc_admin_users.html"><li>Users</li></a>-->
			
		</ul>
	</div>
	
	<!--Logout Icon-->
	<a href="admin_logout.php"><img id="logout-icon" src="user_logout.png"></img></a>
	
	<!--Hello Text-->
	<h2 id="hello-text">Hello, 
	<?php echo $_SESSION["firstname"];?>
	</h2>
	
	
	<div id="block-holder">
	
		<?php
			if($_SESSION["account"] == "publisher") {
		?>
			
				<a href="cifc_admin_add_user_form.php">
				<div id="action-block-left">
					<h3 id="block-text">Add<br>User</h3>
					<img id="block-icon" src="user_add_icon.png"></img>
				</div>
				</a>
		<?php
		}
		?>
	
		<?php
			if($_SESSION["account"] == "publisher" || $_SESSION["account"] == "editor") {
		?>
		<a href="#">
		<div id="action-block-center">
			<h3 id="block-text">Publish<br>Article</h3>
			<img id="block-icon" src="article_publish_icon.png"></img>
		</div>
		</a>
		<?php
		}
		?>
		
		<?php
			if($_SESSION["account"] == "publisher" || $_SESSION["account"] == "editor" || $_SESSION["account"] == "author") {
		?>
		<a href="cifc_admin_add_article_form.php">
		<div id="action-block">
			<h3 id="block-text">Create<br>Article</h3>
			<img id="block-icon" src="article_add.png"></img>
		</div>
		</a>
		<?php
		}
		?>
	</div>
	
</html>
</body>