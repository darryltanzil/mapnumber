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

	<?php include("check_for_css_js.php"); ?>
	<style>
		#header {
			margin: auto;
			display: block;
			text-align: center;
		}

		.header {
			color: #44fc69;
		}

		.s-header {
			color: #ffffff;
		}
	</style>

	<!-- Header -->
	<header id="header">

		<h1>Sorry.</h1>
		<p style="color: #8bbfff;">
			<span class="header">Maybe...</span></span> <br /> <br />
			<span class="s-header">Your friend gave you the wrong number.</span> <br />
			In this case, contact your friend and ask for the mapnumber again.
			<br /> <br />
			<span class="s-header">Mapnumber broke.</span> <br />
			As this is a beta program, sometimes the system might glitch. <br />
			In a later update we will add more features to help you if the mapnumber you got was not found. <br />
			Later, we might add another way to find the address. <br />
			Sorry about the trouble though.
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