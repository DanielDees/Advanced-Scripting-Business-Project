<?php session_start(); ?>
<div id="banner-top">
	<img id="title-img" src="images/fhp_logo.png"></img>

<!--Nav Bar and Dropdown menus-->
	<ul>
		<a href="fhp_home.php"><li>Home</li></a>
		<a href="fhp_institute.php"><li class="institute">Institute</li></a>
		<a href="#"><li>Recent Posts</li></a>
		<div class="dropdown">
			<li>Categories &#x25BC</li>
				<div class="dropdown-content">
					<a href="#">A</a>
					<a href="#">B</a>
					<a href="#">C</a>
					<a href="#">D</a>
					<a href="#">E</a>
					<a href="#">F</a>
					<a href="#">G</a>
					<a href="#">H</a>
					<a href="#">I</a>
				</div>
		</div>					
		
		<a href="#"><li>Contact</li></a>	

		<div class="dropdown">
			<li>About &#x25BC</li>
				<div class="dropdown-content">
					<a href="fhp_about.php">Freedom's Hill Primer</a>
					<a href="fhp_about_institute.php">Institute</a>
				</div>
		</div>			
		<?php 
			if($_SESSION != null){
				echo "<a href=\"dashboard.php\"><li>Dashboard</li></a>"; 
				echo "<a href=\"logout.php\"><li>Logout</li></a>"; 
			} else {
				echo "<a href=\"fhp_login.php\"><li>login</li></a>"; 
			}
		?>
	</ul>
<!--End Nav Bar-->
</div>