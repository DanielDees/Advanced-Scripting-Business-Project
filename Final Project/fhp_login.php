<!DOCTYPE html>

<html>
	<head>
		<meta charset="UTF-8">
		
		<title>Login</title>
		
		<!-- internal css for the login page -->
    	<style>
			* {
			    box-sizing: border-box;
			}
			
			*:focus {
				outline: none;
			}
			
			body {
				font-family: Arial;
				background-color: #12beed;
				padding: 50px;
			}
			
			.login {
				margin: 20px auto;
				width: 300px;
			}
			
			.login-screen {
				background-color: #FFF;
				padding: 20px;
				border-radius: 5px
			}
			
			.app-title {
				text-align: center;
				color: #777;
			}
			
			.login-form {
				text-align: center;
			}
			
			.control-group {
				margin-bottom: 10px;
			}
			
			input {
				text-align: left;
				background-color: #ECF0F1;
				border: 2px solid transparent;
				border-radius: 3px;
				font-size: 16px;
				font-weight: 200;
				padding: 10px 0;
				padding-left: 5px;
				width: 250px;
				transition: border .5s;
			}
			
			input:focus {
				border: 2px solid #3498DB;
				box-shadow: none;
			}
			
			.btn {
				border: 2px solid transparent;
				background: #3498DB;
				color: #ffffff;
				font-size: 16px;
				line-height: 25px;
				padding: 10px 0;
				text-decoration: none;
				text-shadow: none;
				border-radius: 3px;
				box-shadow: none;
				transition: 0.25s;
				display: block;
				width: 250px;
				margin: 0 auto;
				margin-bottom: 5px;
			}
			
			.btn:hover {
				background-color: #2980B9;
			}
			
			.login-link {
				font-size: 12px;
				color: #444;
				display: block;
				margin-top: 12px;
			}
			
			.error {
			    color: #f44242;
			    margin-bottom: 5px;
			}
		</style>
		<!-- end of internal css -->
	</head>


	<body>
		<div class="login">
			<div class="login-screen">
				<div class="app-title">
					<h1>Login</h1>
				</div>
	
				<form action="fhp_verify_user.php" method="post" class="login-form">
					<?php
                    if (isset($_GET['error']))
                    {
                        echo "<div class='error'>";
                            echo "Incorrect username or password!";
            			echo "</div>";
                    }
        			?>
				
					<div class="control-group">
						<input type="text" class="login-field" placeholder="username" id="username" name="username">
						<label class="login-field-icon fui-user" for="login-name"></label>
					</div>
	
					<div class="control-group">
						<input type="password" class="login-field" placeholder="password" id="password" name="password">
						<label class="login-field-icon fui-lock" for="login-pass"></label>
					</div>
					
					<button class="btn btn-primary btn-large btn-block" type="submit">Login</button>
					<a class="btn btn-primary btn-large btn-block" href="fhp_institute.html">Back</a>
				</form>
			</div>
		</div>
	</body>
  
</html>
