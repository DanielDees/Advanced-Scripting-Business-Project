<html>

<head>
<?php
/*
*Name: Cameron Cromer
*Date: Nov. 19, 2017
*Purpose: to add new articles to db
*/
session_start();
if($_SESSION['account'] == ""){
	header("Location: fhp_home.php");
}
    require_once('connect.php');
?>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="fhp_test.css">
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
	    <br>
	    <br>
	    <select id="artcategory" name="artcategory">
		  <?php get_category(); ?>
		</select>
		<br>
		<br>
	    <button class="button" type="submit" name="submit">Create Test</button>
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
<script type="text/javascript" src="jquery/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="tinymce/tinymce.min.js"></script>
<script type="text/javascript" src="tinymce/tinymceinit-100.js"></script>
<script type="text/javascript" src="tinymce/tinymceinit-200.js"></script>
<script type="text/javascript" src="tinymce/tinymceinit-300.js"></script>

</main>
</html>