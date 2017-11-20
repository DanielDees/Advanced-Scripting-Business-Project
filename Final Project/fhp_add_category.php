<html>
<head>
	<?php 
		require_once('partials/login_check.php'); 
	?>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="fhp_test.css">
	<title>FHP About</title>
</head>
<body>
	<?php 
		require_once('partials/nav_default.php'); 
	?>
<main>
	<div id="div-section-holder">
		<h1 id="section-name">Add Category</h1>
	</div>

	<div id="div-section-holder">
		<form action="" method="post">
	      	<div class="row">
		        <div class="col-md-12">
			        <h3>Category:</h3>
			       	<textarea name="artcategory" class=""></textarea>
					<br><br>
				    <button class="button" type="submit" name="submit">Create category</button>
			    </div>
	      	</div>
	  	</form>
	</div>
	<?php
		if ($_SERVER['REQUEST_METHOD'] == "POST"){
		  $category = escape_string($_POST['artcategory']);
		  $query = query("INSERT INTO Categories (name) VALUES ('$category')");
		  confirm($query);
		  header("Location: dashboard.php");
		}
	?>
	<?php 
		require_once('partials/tinymc_footer.php'); 
	?>
</main>
</html>