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
		<style>
			#header{
				margin: auto;
				display: block;
				text-align: center;
			}
		</style>
	</head>
	<body>
		
		<?php
				
			include("check_for_css_js.php");
				 
						$mapnumber = $_POST["mapnumber"];
						if ($mapnumber) {
						$servername = "localhost";
						$username = "darryl_database";
						$password = "xxxxxxx";
						$dbname = "xxxxxx";
			
			
						// Create connection
						$conn = new mysqli($servername, $username, $password, $dbname);
						
						// Check connection
						if ($conn->connect_error) {
					    	die("Connection failed: " . $conn->connect_error);
						} 
						
													
		?>
		
		<!-- Header -->
			<header id="header">
				<h1>Address you are searching for</h1>
				<p style="color: #8bbfff;font-size: 300%">
					<span style="color: #00ff34">
					<?php 
						$result = mysqli_query($conn, "SELECT `Name`,`Address`, `Zipcode` FROM mapnumbers WHERE Mapnumber=$mapnumber"); 
						while ($row = $result->fetch_assoc()) {
							$name = $row['Name'];
							$address = $row['Address'];
							$zipcode = $row['Zipcode'];
						}
						
						// if address is not found
						if (is_null($name) && is_null($address) && is_null($zipcode)) {
							print "<span style='color: #fa2a2a;'>Address Not Found.<br />
							Please double check the Mapnumber you entered...</span>";
						}
						else {
							print "$name <br />";
							$address_parsed = str_replace(' ', '+', $address).'+'.str_replace(' ', '+', $zipcode);
						}
						
					?>
					</span>
					<?php 
						print "$address <br /> <span style='color: yellow;'>$zipcode</span>";
					?>
					<br />					
				</p>
				<input type="button" value="&nbsp; Take Me There &nbsp;" onclick="window.location='<?php echo "https://www.google.com/maps/dir//$address_parsed/" ?>';"/>
				<input type="button" value="&nbsp; Back &nbsp;" class="back-button" onclick="window.location='index.php';"/>
			<br />
			<br />
			<br />
				<p>
					<a href="not_right_address.php" style="text-decoration: none !important;">Is this not the right address?</a>
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

		<?php
			mysqli_close($conn);
			} else {
				print("<span style='font-size: 30px;'>Sorry. For some reason if you reload this page, Mapnumber breaks.<br /> <br /> This will be fixed in the future.
				Sorry for the inconvenience.</span><br /> <br />
					  <input type=\"button\" value=\"&nbsp; Back &nbsp;\" class=\"back-button\" onclick=\"window.location='index.php';\"/>
					  <style>
					.back-button {
						background-color: #ff0808 !important;
						width: 200px !important;
					}
					.back-button:hover {
						background-color: #ff5454 !important;
					}
					</style>
");
			}
			include("footer.php"); 
			
		?>

		<!-- Scripts -->
			<!--[if lte IE 8]><script src="template/assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>