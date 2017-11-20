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
	
<main>

<div id="div-section-holder-admin">
	<h1 id="section-name-admin">Add an Article</h1>
</div>

<div id="add-form-div">
	<form action="cifc_admin_add_article_to_db.php" method="post" id="add-form">
		<h3 id="input-label">Article Title</h3>
		<input tabindex="1" id="add-form-input" name="art_title" placeholder ="Enter Article Title"required>
		<br>
	  
		<h3 id="input-label">Content</h3>
		<textarea tabindex="2" name="art_content" id="add-form-textarea" placeholder="Enter Article Content" required></textarea>
	  
	  	<h3 id="input-label">Article Preview Image</h3>
		<input tabindex="3" type="file" id="input-file" name="img-upload" accept="image/*">	
		<br><br>
	
		<br>
		<button tabindex="4" id="add-form-submit-btn" type="submit" name="submit">Submit</button>
		
	</form>
</div>

	<br><br>
</main>
</body>

<script type="text/javascript" src="jquery/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="tinymce/tinymce.min.js"></script>
<script type="text/javascript" src="tinymce/tinymceinit-100.js"></script>
<script type="text/javascript" src="tinymce/tinymceinit-200.js"></script>
<script type="text/javascript" src="tinymce/tinymceinit-300.js"></script>


</html>