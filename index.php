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
		
		
		<?php include("check_for_css_js.php"); ?>
		<img src="z_images/logo.png" width="100px">
		
		<!-- Header -->
			<header id="header">
				<h1>Mapnumber</h1>
				
				<p style="color: #8bbfff;">
					Welcome to Mapnumber. A place where you can easily store your address, <br />
					and transform it into a number.
				</p>

			</header>

		<!-- Find Mapnumber Form -->
			<form id="signup-form" method="post" action="find_address.php">
				<input type="text" name="mapnumber" id="mapnumber" placeholder="Enter Mapnumber" style="color: #8bbfff;width: 350px;" required/>
				<input type="submit" value="Find Address!" />
			</form>
			
		<!-- Sign Up Form -->
			<form action="signup.php">
				<input type="submit" value="&nbsp;Sign Up!&nbsp;" style="background-color: #27c5ff ;" class="signup-button"/>
				&nbsp;
				<input type="button" value="&nbsp;What this is about&nbsp;" onclick="window.location='about.php';" class="about-button"/>
				<style>
					.signup-button:hover{
						background-color: #3cd4f6 !important;
					}
					
					.about-button {
						background-color: #ff00cb !important;
					}
					
					.about-button:hover {
						background-color: #f246fb !important;
					}
				</style>

			</form>
				<?php include("footer.php"); ?>

		<!-- Scripts -->
			<!--[if lte IE 8]><script src="template/assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>