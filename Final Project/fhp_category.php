<head>

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="fhp_test.css">
<title>CIFC</title>
</head>

<!--Connect to database-->
<?php
require_once('connect.php');
?>

<body>

	<?php 
	require_once('partials/nav_with_dropdown.php');
	?>
	
	<!--Article Preview Holder-->
	<div id="all-article-view">
	
		<!--Get articles and sort by date added-->
	<?php
	    $cat_name = $_GET['id'];
	
    	//Set up query to add data to table
    	$query = "SELECT title, content, author, timestamp, category
    		      FROM post
                  WHERE category = '" . $cat_name . "'
    		      ORDER BY timestamp DESC";
    	
    	//Run query//Run query
    	$result = $conn->query($query);
    	
    	$formatCnt = 0;
	
		//Read results
		while($article = $result->fetch_assoc()) { 	
	?>	
	
		<div id="article-preview-holder">	
				<!--image-->
				<img id="preview-img" src="images/img3.jpg"></img>
				<!--title and info-->
				
				<!--Title-->
				<div id="title-div">
					<h2 id="art-title">
						<?php echo $article['title'];?>
					</h2>
				</div>
					
				<div id="info-div">
					<!--Info-->
					<img id="tiny-icon"src="images/author_icon.png"></img>
					<h4 id="info-text"> 
					<?php echo $article['author'];?>
					</h4>
						&nbsp
					<img id="tiny-icon"src="images/time_icon.png"></img>
					<h4 id="info-text">
						<?php echo $article['timestamp'];?>
					</h4>
				</div>
			</div>
			
		<?php } ?>			
	</div>	


</body>

</html>