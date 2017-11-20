<html>

	<meta name="viewport" content="width=device-width, initial-scale=1">

    <head>
    	<link rel="stylesheet" href="fhp_test.css">
    	<title>CIFC Reset Password</title>
    </head>
    
    	
        <div id="banner-top">
        	<img id="title-img" src="fhp_logo.png"></img>	
        	
        		<ul>
        			<h2 id="admin-subtitle-login">Send Reset Link to This Email</h2>		
        		</ul>
        </div>
    
    <body>	
    
        <div id="login-holder">
        	<form action="fhp_send_reset_link.php" method="post">
        		<!--email input-->
        		<input type="email" id="email" placeholder="email" name="email" required>
        		<br><br>
        		<!--Submit Button-->
        		<button type="submit" id="submit" name="submit">Submit</button>
        	</form>	
        </div>

	</body>
</html>