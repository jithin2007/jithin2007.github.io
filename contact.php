<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contact Us</title>
	<link rel="stylesheet" type="text/css" href="stylem.css">
</head>
<body>
	<div class="navbar">
	<div class="logo">
		<a href="index.html"><img src="logo4.png" width="125px"></a>
	</div>
	<nav>
		<ul id="MenuItems">
			<li><a href="index.html">Home</a></li>
			<li>
				<a href="login.php">Login</a>
			</li>
			<li>
				<a href="logout.php">Logout</a>
			</li>
			<li><a href="gallery.html">Gallery</a></li>
			<li><a href="flights.html">Book A Ticket</a></li>
			<li><a href="contact.php">Contact Us</a></li>
			<li><a href="aboutus.html">About Us</a></li>
			<li><a href="learn.html">Learn</a></li>
			<li><a href="creators.html">Creators</a></li>
			<li><a href="feedback.html">Feedback</a></li>
			<li><p><b>Page By Jithin Mathew</b></p></li>
		</ul>
	</nav>
</div>
	<div class="contact-title">
		<h1>Eiffel Tower, Paris</h1>
		<h2>If You Have Any Complaints Regarding The Website Contact Us </h2>
	</div>
	<div class="contact-form">
		<form id="contact-form" method="post" action="">
			<input name="name" type="text" class="form-control" placeholder="Your Name" required>
			<br>
			<input name="email" type="email" class="form-control" placeholder="Your Email" required>
			<br>
			<textarea name="message" class="form-control" placeholder="Message" rows="4" required></textarea>
			<br>
			<input type="submit" class="form-control submit" value="Submit" onclick="popUp()">
		</form>
	</div>
	<script>
	function popUp(){
		alert("Query submitted successfuly. We will look into it and get back to you soon");
	}
</script>
<script>
	var MenuItems = document.getElementById("MenuItems");

	MenuItems.style.maxHeight = "0px";

	function menutoggle(){
		if(MenuItems.style.maxHeight == "0px")
		{
			MenuItems.style.maxHeight = "200px";
		}
		else{
			MenuItems.style.maxHeight = "0px";
		}
	}
</script>
</body>
</html>