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
<?php

 $firstname = @$_POST['fname'];
 $lastname = @$_POST['lname'];
 $phone = @$_POST['phone'];
 $email = @$_POST['email'];

 echo "Thank you! We received the following information from you:<br>$firstname<br>$lastname<br>$phone<br>$email<br><br>Have a great day!<br>"; 
?>

<script>
	
	if (typeof(Storage) !== "undefined") {
		
		localStorage.setItem("fname", "<?php echo @$_POST['fname']; ?>");
		localStorage.setItem("lname", "<?php echo @$_POST['lname']; ?>");
		localStorage.setItem("phone", "<?php echo @$_POST['phone']; ?>");
		localStorage.setItem("email", "<?php echo @$_POST['email']; ?>");		
	} else {
		
		alert("No Storage for you!");
	}
	
</script>

<button ><a href="form-storage.php">Back to the Form</a></button></p>

						
<footer>
		<div id="footer"><?php include('includes/Footer.php'); ?> </div>
		</footer>
</div></body></html>