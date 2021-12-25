<!DOCTYPE HTML>
<html>
	<head>
		<title>Mapnumber</title>
		<meta charset="utf-8" />
		<?php include("title_icon_insert.php"); ?>
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!--[if lte IE 8]><script src="template/assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="template/assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="template/assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="template/assets/css/ie9.css" /><![endif]-->
		
		
		<?php 
			
			// include the noscripts
			include("check_for_css_js.php");
			
			// get the form data
			$email = $_POST["email"];
			$address = $_POST["address"];
			$name = $_POST["name"];
			$mapnumber = $_POST["mapnumber"];
			$zipcode = $_POST["zipcode"];
			
			$servername = "localhost";
			$username = "darryl_database";
			$password = "xxxxxxxxx";
			$dbname = "darryl_mapnumber";


			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			
			// Check connection
			if ($conn->connect_error) {
		    	die("Connection failed: " . $conn->connect_error);
			} 
			
			// make it SQL safe
			$name = mysqli_real_escape_string ($conn, $name);
			$address = mysqli_real_escape_string ($conn, $address);
			$email = mysqli_real_escape_string ($conn, $email);
			$mapnumber = mysqli_real_escape_string ($conn, $mapnumber);
			$zipcode = mysqli_real_escape_string ($conn, $zipcode);
			
			
			// Select data from Mapnumber to check if already made
			$sqli = mysqli_query($conn, "SELECT `Mapnumber` FROM mapnumbers WHERE Mapnumber=$mapnumber"); 
			if(mysqli_num_rows($sqli)>=1)
			{
				echo "<style>.body {display: none !important;}</style>";
				echo "<p style='font-size: 30px;font-family: Arial;'>Sorry That Mapnumber has already been taken.<br /> <br />Please go back to our form and choose a
				different Mapnumber.</p>";
				echo "<br /> <br /> <a href='signup.php' style='font-size: 30px;'>Back to Sign In</a>";
   			}
   			else
   			{
	   			// Create Query Text
				$sql = "INSERT INTO mapnumbers (Name, Address, Email, Mapnumber, Zipcode)
				VALUES ('$name', '$address', '$email', '$mapnumber', '$zipcode')";
						
				// Check if made successfully
				if ($conn->query($sql) === TRUE) {
			   		//echo "New record created successfully";
				} else {
			    	echo "Error: " . $sql . "<br>" . $conn->error;
				}
			}

			

			$conn->close();
		?>

	</head>
	
	<body>
		<span class="body">
		<style>
			#header{
				margin: auto;
				display: block;
				text-align: center;
			}
		</style>

		<!-- Header -->
			<header id="header">

				<h1>You have been signed up!</h1>
				<p style="color: #8bbfff;">
					Thank you for Signing Up A Mapnumber! <br />
					Here is what you made: <br />
					<?php
						print "<span style='color:green'>
							   Nickname: $name, <br />
							   Address: $address, <br />
							   Email: $email, <br />
							   Mapnumber: $mapnumber
							   </span>
							  ";	
					?>
					<br />
					Thank you for making a Mapnumber. To use, give a person your mapnumber and tell them to search it at http://www.mapnumber.darryltanzil.com
				</p>
			<input type="button" value="&nbsp; Back &nbsp;" class="back-button" onclick="window.location='index.php';"/>
			<style>
					.back-button {
						background-color: #ff0808 !important;
					}
					.back-button:hover {
						background-color: #ff5454 !important;
					}
			</style>
			</header>

		<?php include("footer.php"); ?>

		<!-- Scripts -->
			<!--[if lte IE 8]><script src="template/assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
		</span>
	</body>
</html>