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
</head>

<body>

	<?php
	include("check_for_css_js.php");

	$servername = "localhost";
	$username = "darryl_database";
	$password = "xxxxxxxx";
	$dbname = "darryl_mapnumber";

	$feedback = $_POST["feedback"];

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	// make it SQL safe
	$feedback = mysqli_real_escape_string($conn, $feedback);

	// Create Query Text
	$sql = "INSERT INTO Feedback (`Feedback`)
						VALUES ('$feedback')";



	// Check if made successfully
	if ($conn->query($sql) === TRUE) {
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}


	$conn->close();

	?>

	<style>
		#header {
			margin: auto;
			display: block;
			text-align: center;
		}
	</style>

	<!-- Header -->
	<header id="header">

		<h1>Thanks!</h1>
		<p style="color: #8bbfff;">
			Thank you for your feedback! We will try to add your suggestion in our website later on. Thanks!
		</p>
		<input type="button" value="&nbsp; Back &nbsp;" class="back-button" onclick="window.location='index.php';" />
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

</body>

</html>