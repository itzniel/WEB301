<!doctype html>
<html lang="en">
	<head>
		<title>Contact Us</title>
		<style>
		<?php include('css/Main.css'); ?> 
		</style>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="https://maps.google.com/maps/api/js?key="></script>	
	</head>

    <body>
	<div id="container">
			<div id="nav"><?php include('includes/Header.php'); ?> </div>
			<form action="form-action.php" method="post" name="myform" id="myForm">
                <h1>Get in touch</h1>
                <h1><small> Fill out the form below and I'll get back to you shortly.</small></h1>

			<div class="fieldWrap">
				<label for="fname">First Name</label><br>
				<input type="text" name="fname" id="fname" value="" size="30" placeholder="Your First Name" required>
			</div>
			<div class="fieldWrap">
				<label for="lname">Last Name</label><br>
				<input type="text" name="lname" id="lname" value="" size="30" placeholder="Your Last Name" >
			</div>
			<div class="fieldWrap">
				<label for="email">Email Address</label><br>
				<input type="text" name="email" id="email" value="" size="25" placeholder="name@domain.com">
			</div>
			<div class="fieldWrap">
				<label for="phone">Phone Number</label><br>
				<input type="text" name="phone" id="phone" value="" size="15" placeholder="888-888-8888">
			</div>
		
             <input type="submit" value="GET IN TOUCH">
        </form>
		<p style = "background-color: beige ">  <button onclick="getLocation()" id ="loca">Share My Location</button></p>

		<p id="location"></p>
		<div id="googleMap"></div>
		<div id="directions"></div>
						
    <footer>
		<div id="footer"><?php include('includes/Footer.php'); ?> </div>
		</footer>
</div>		
	</body>
</html>