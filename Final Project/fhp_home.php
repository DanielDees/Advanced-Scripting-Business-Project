<html>
<?php session_start(); ?>
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>
<link rel="stylesheet" href="fhp_test.css">
<title>FHP Home</title>
</head>

<body id="home">	

	<div id="banner-top-home">
		<img id="title-img" src="fhp_logo.png"></img>

		<ul>
			<a href="fhp_home.php"><li class="home">Home</li></a>
			
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
			if($_SESSION != null){
				echo "<a href=\"dashboard.php\"><li>Dashboard</li></a>"; 
				echo "<a href=\"logout.php\"><li>Logout</li></a>"; 
			}else{
				echo "<a href=\"fhp_login.php\"><li>login</li></a>"; 
			}
			?> 		
			
		</ul>
	</div>
	
	<div id="main-div">
		<h1>Welcome to Freedom's Hill Primer</h1>
	</div>
	

	
	<div id="bottom-text">
		<img id="scroll-arrow-left" src="double_down_icon.png">
		<h3 id="bt-title">
			Freedom’s Hill Primer is a platform to promote scholarly 
			pursuits within the humanities that provide a window towards 
			a more timeless truth.
		</h3> 

		<!--<hr>-->
		
		<p id="bt-content">
			Our website journal is maintained by our faculty and students from the 
			Southern Wesleyan University community. However, the purpose for our online 
			publication is to serve the broader community both as a resource and as a space for the exchange of ideas that promote the study of the liberal arts.<br><br>
	 
			While we at Freedom’s Hill Primer welcome all points of view, our primary purpose is to provide a creative space for scholars and writers to explore and produce ideas that expand our understanding of contemporary literature and film, popular culture, and classical thought that contributes to the Christian experience.
		</p>
	</div>
</body>

</html>