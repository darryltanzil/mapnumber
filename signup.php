<!DOCTYPE HTML>
<html>
	<head>
		<title>Mapnumber</title>
		<meta charset="utf-8" />
		<?php include("title_icon_insert.php"); ?>
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!--[if lte IE 8]><script src="template/assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="template/assets/css/main.css" />
		<script type="text/javascript" src="jquery_library.js"></script>
		<script type="text/javascript" src="js/checkuseragent.js"></script>
		<!--[if lte IE 8]><link rel="stylesheet" href="template/assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="template/assets/css/ie9.css" /><![endif]-->
		<script type="text/javascript" src="jquery_library.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				$("#mapnumber").keydown(function(event) {
					
					// Allow only backspace and delete
					if ( event.keyCode == 46 || event.keyCode == 8 ) {
						// let it happen, don't do anything
					}
					else {
						
						// Ensure that it is a number and stop the keypress
						if (event.keyCode < 48 || event.keyCode > 57 ) {
							event.preventDefault();	
						}	
					
					}
				});
			});
		</script>
	</head>
	<body>
		
		<?php
			
			
			$servername = "localhost";
						$username = "darryl_database";
						$password = "xxxxxxx";
						$dbname = "darryl_main";
			
			
						// Create connection
						$conn = new mysqli($servername, $username, $password, $dbname);
						
						// Check connection
						if ($conn->connect_error) {
					    	die("Connection failed: " . $conn->connect_error);
						} 
						
						include("check_for_css_js.php"); 
			
						$conn->close();
			
		?>
							
		<!-- Header -->
			<header id="header">
				<h1>Sign Up</h1>
				<p style="color: #8bbfff;">
				  Sign Up A Mapnumber.
				</p>
			</header>

		<!-- Sign Up Form -->
			<form method="post" action="signup_process.php">
				<input type="email" name="email" id="email" placeholder="example@gmail.com" style="width:350px" style="color: #8bbfff;" required/>
				<br />
				<input type="text" name="address" id="address" placeholder="1234 345A st, Vancouver, B.C, Canada" style="width:350px" style="color: #8bbfff;" required/>
				<br />
				<input type="text" name="name" id="name" placeholder="Nickname (Not Real Name)" style="width:350px" style="color: #8bbfff;" required/>
				<br />
				<input type="text" name="mapnumber" id="mapnumber" placeholder="Mapnumber (any integer)" style="width:350px" style="color: #8bbfff;" required/>
				<br />
				<input type="text" name="zipcode" id="zipcode" placeholder="Zipcode" style="width:350px" style="color: #8bbfff;" required/>
				<br />
				<input type="submit" value="&nbsp; Create &nbsp;" />
				&nbsp;
				<input type="button" value="&nbsp; Back &nbsp;" class="back-button" onclick="window.location='index.php';"/>
				<style>
					.back-button {
						background-color: #ff0808 !important;
					}
					.back-button:hover {
						background-color: #ff5454 !important;
					}
				</style>
			</form>
		

		<!-- Scripts -->
			<!--[if lte IE 8]><script src="template/assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>