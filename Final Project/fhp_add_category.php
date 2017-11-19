<html>

<head>
<?php
/*
*Name: Cameron Cromer
*Date: Nov. 19, 2017
*Purpose: to add new category to db
*/
session_start();
if($_SESSION['account'] == "" || $_SESSION['account'] == "author"){
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
	<h1 id="section-name">Add Category</h1>
</div>

<div id="div-section-holder">
	<form action="" method="post">
      	<div class="row">
        <div class="col-md-12">
        <h3>Category:</h3>
        <textarea name="artcategory" class=""></textarea>
		<br>
		<br>
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
<script type="text/javascript" src="jquery/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="tinymce/tinymce.min.js"></script>
<script type="text/javascript" src="tinymce/tinymceinit-100.js"></script>
<script type="text/javascript" src="tinymce/tinymceinit-200.js"></script>
<script type="text/javascript" src="tinymce/tinymceinit-300.js"></script>

</main>
</html>