<html>
<head>
	<?php 
		require_once('partials/login_check.php'); 
	?>
	<title>FHP Add Article</title>
</head>
<body>
	<?php 
		require_once('partials/dashboard_nav.php'); 
	?>
<main>
	<div id="div-section-holder">
		<h1 id="section-name">Add Article</h1>
	</div>

	<div id="div-section-holder">
		<form action="" method="post">
	      	<div class="row">
		        <div class="col-md-12">
			        <h3>Article Title:</h3>
			        	<textarea name="arttitle" class="tinymce-100"></textarea>
			      		<br>
				    <h3>Content:</h3>
			      		<textarea name="artcontent" class="tinymce-300"></textarea>
				    	<br><br>
				    	Category:
					    <select id="artcategory" name="artcategory">
						  <?php get_category(); ?>
						</select>
						<br><br>
				   		<button class="button" type="submit" name="submit">Create Article</button>
			    </div>
	      	</div>
	  	</form>
	</div>
	<?php
		if ($_SERVER['REQUEST_METHOD'] == "POST"){
		    $title = escape_string($_POST['arttitle']);
		    $content = escape_string($_POST['artcontent']);
		    $author = $_SESSION['firstname'] . " " . $_SESSION['lastname'];
		    $date = date("Y-m-d h:i:sH");
		    $date = substr($date, 0, -2);
		    $category = escape_string($_POST['artcategory']);

		    $query = query("INSERT INTO Post (title, content, author, timestamp, category, is_live) VALUES ('$title', '$content', '$author', '$date', '$category', 0)");
		    confirm($query);
		    header("Location: dashboard.php");
		}
	?>
	<?php 
		require_once('partials/tinymc_footer.php'); 
	?>
</main>
</html>