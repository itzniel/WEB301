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
	</head>
	<body>
		<div id="message"></div>
		<form action="form-action.php" method="post" name="myform" id="myForm">
			<div class="fieldWrap">
				<label for="fname">First Name</label><br>
				<input type="text" name="fname" id="fname" value="" size="30" placeholder="Your First Name" required>
			</div>
			<div class="fieldWrap">
				<label for="lname">Last Name</label><br>
				<input type="text" name="lname" id="lname" value="" size="30" placeholder="Your Last Name">
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
		
		<script>			
			
			//localStorage.clear();			
			
			//insert code to get data from local storage and present a message to the user
			var firstName = localStorage.getItem("fname");
            var lastName = localStorage.getItem("lname");
            var phone = localStorage.getItem("phone");
            var email = localStorage.getItem("email");
            
            if (firstName) {
                document.getElementById("message").innerHTML = "Good to see you again "+firstName+"! Previous information is saved or edit to update.<br>";
                //$('form').css("display","none");
                document.getElementById("fname").value = firstName;                
                document.getElementById("lname").value = lastName;                
                document.getElementById("phone").value = phone;                
                document.getElementById("email").value = email;                
            } else {
                document.getElementById("message").innerHTML = "Please enter your information below:<br><br>";
                $('form').css("display","block");
            }        
		</script>
		<footer>
		<div id="footer"><?php include('includes/Footer.php'); ?> </div>
		</footer>
		</div>
	</body>
</html>