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
			#header{
				margin: auto;
				display: block;
				text-align: center;
			}
		</style>

		<!-- Header -->
			<header id="header">

				<h1>Feedback</h1>
				<p style="color: #8bbfff;">
				  Here is the feedback page. Here you can add suggestions to add to Mapnumber. <br />
				  <form action="feedback_process.php" method="post">
				  <textarea cols="10" rows="10" name="feedback" required>
Add a suggestion.
				  </textarea>
				  <br /> <br />
				  <input type="submit" value="&nbsp; Submit! &nbsp;"/>
				  <input type="button" value="&nbsp; Back &nbsp;" class="back-button" onclick="window.location='index.php';"/>
				  </form>
				</p>
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