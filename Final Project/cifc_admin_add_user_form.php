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
			<a href="cifc_admin_dashboard.php"><li>Dashboard</li></a>	
			<!--Articles Tab
			<a href="cifc_admin_article_view.php"><li class="articles">Articles</li></a>	-->			
		</ul>
	</div>
	
	<div id="div-section-holder-admin">
		<h1 id="section-name-admin">Add a User</h1>
	</div>
	
	

	<div id="add-user-form-div">
		<form id="add-form" action="cifc_admin_add_user_to_db.php" method="post">
			<h3 id="input-user-label">First Name</h3>
			<input type="text" tabindex="1" id="add-form-input" name="user-fname" placeholder ="Enter First Name"required>
			<br>
			
			<h3 id="input-label">Last Name</h3>
			<input type="text" tabindex="2" id="add-form-input" name="user-lname" placeholder ="Enter Last Name"required>
			<br>
			
			<h3 id="input-user-label">Email</h3>
			<input type="email" tabindex="3" id="add-form-input" name="user-email" placeholder ="Enter Email"required>
			<br>
			
			<h3 id="input-user-label">Username</h3>
			<input type="text" tabindex="4" id="add-form-input" name="user-username" placeholder ="Enter Username" required>
			<br>
			
			<h3 id="input-user-label">Pasword</h3>
			<input type="text" tabindex="5" id="add-form-input" name="user-password" placeholder ="Enter Password" required>
			<br>
			
			<h3 id="input-user-label">Re-Enter Pasword</h3>
			<input type="text" tabindex="6" id="add-form-input" name="user-re-password" placeholder="Re-Enter Password" required>
			<br>
			
			<!--Option Menu-->
			<h3 id="input-user-label">Account Type</h3>
			<!--Replace with Option Menu-->
			<select tabindex="7" name="user-type">		
				<option selected disabled>Select Account Type</option>
				<option value="PUBLISHER">Publisher</option>
				<option value="EDITOR">Editor</option>
				<option value="AUTHOR">Author</option>
			</select>
					
			<br><br><br><br>
			<button tabindex="8" id="add-form-submit-btn" type="submit" name="submit-btn">Submit</button>	
		
		</form>
		</div>
	
	<br><br>

</body>
</html>