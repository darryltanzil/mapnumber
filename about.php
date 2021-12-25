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
	</style>

	<!-- Header -->
	<header id="header">

		<h1>About</h1>
		<p style="color: #8bbfff;">
			This site is basically a place to simplify your address. An example is, when you want to go to someone's house, <br />
			and you don't want to give them your address on that spot because it's too long. <br />
			What you do with this site, is give them your Mapnumber, and tell them to search it at
			Mapnumber.com later.
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