<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <title>Welcome</title>
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
        #welcome { position: absolute; width: 200px; margin-left: 1500px; background-color: grey; opacity: 0.8; border-radius: 10px; margin-top: 10px; padding-bottom: 10px; }
		#location { position: absolute; width: 200px; margin-left: 1500px; margin-top: 775px; background-color: grey; opacity: 0.8; border-radius: 10px; padding-bottom: 5px; padding-top: 5px; }
    </style>
		
</head>
<body onload='getLocation()'>
    <div class="sidenav">
      <a href="about.html">About</a>
      <a href="men.html">Men</a>
      <a href="women.html">Women</a>
      <a href="contact.html">Contact Us</a>
      <a href="payment.php">Payment</a>
    </div>
    <div id='welcome'>
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b></h1>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </div>

	<p id="location"></p>

	<script>
		var x = document.getElementById("location");

		function getLocation() {
			if (navigator.geolocation) {
				navigator.geolocation.watchPosition(showPosition);
			} else { 
				x.innerHTML = "Geolocation is not supported by this browser.";}
		}
    
		function showPosition(position) {
			x.innerHTML="Latitude: " + position.coords.latitude + 
			" <br>Longitude: " + position.coords.longitude;
		}
	</script>

</body>
</html>