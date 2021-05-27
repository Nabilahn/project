<?php
session_start()
?>
<!DOCTYPE html>
<html>
	<head>
		<title>4 Delicious</title>
		<link rel="icon" href="cup.png" type="image/jpg" sizes="16x16">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" href="style2.css">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<script src="script.js"></script>
        <style>
        .w3-button {width:150px;}
        </style>
	</head>
	<body>
		<header>
<nav>
<div id="mySidepanel" class="sidepanel">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">X</a>
  <a href="index.php">Home</a>
  <a href="aboutus.html">About Us</a>
  <a href="product.html">Product</a>
  <a href="first.html">Order</a>
  <a href="contact.html">Team</a>
</div>
</nav>

<button class="openbtn" onclick="openNav()">=</button>  

<script>
function openNav() {
  document.getElementById("mySidepanel").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidepanel").style.width = "0";
}
</script>


<!-- MAIN (Center website) -->
<div class="main">
</header>
		<div class="w3-container">
				<div class="container">
                <div class="row">
                <h1>Login</h1>
					<?php
					if (isset($_SESSION['userId'])) {
                    echo '<form action="logout.php" method="post">
						<button class="w3-button w3-brown" type="submit" name="logout-submit">Logout</button>
					</form>';
                    }                                  
                     else {                     	
                    echo '<form action="login.php" method="post">
                        <div class="col-25">
						<input type="text" name="mailuid" placeholder="Username/E-mail...">
						<input type="password" name="pwd" placeholder="Password..."><br>
						<br><p><button type="submit" name="login-submit" class="w3-button w3-light-green">Login</button>
						<br><br>
					</form>
					<p><button class="w3-button w3-dark-grey"><a href="signup.php">Signup</a></button></p>';
	                 }

					?>
				</div>
			</div>
	</body>
</html>