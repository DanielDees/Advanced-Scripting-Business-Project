<div id="banner-top">
	<img id="title-img" src="images/fhp_logo.png"></img>
	<ul>
		<a href="fhp_home.php"><li>Home</li></a>
		<a href="fhp_institute.php"><li>Institute</li></a>
		<a href="#"><li>Contact</li></a>
					
		<div class="dropdown">
			<li>About &#x25BC</li>
				<div class="dropdown-content">
					<a href="fhp_about.php">Freedom's Hill Primer</a>
					<a href="fhp_about_institute.php">Institute</a>
				</div>
		</div>
		<?php 
			if($_SESSION['account'] != null){
				echo "<a href=\"dashboard.php\"><li class=\"dashboard\">Dashboard</li></a>"; 
				echo "<a href=\"logout.php\"><li>Logout</li></a>"; 
			}
		?> 									
	</ul>
</div>