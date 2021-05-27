<!DOCTYPE html>
<html>
	<head>
		<title>4 Delicious</title>
		<link rel="icon" href="cup.png" type="image/jpg" sizes="16x16">
	</head>
	<body>

<?php
require "header.php";
?>

<main>
	<section class="section-default">
	<h1>Signup</h1>
	<?php
	if (isset($_GET['error'])) {
		if ($_GET['error'] == "emptyfields") {
			echo "Fill in all fields !";
		}
		else if ($_GET["error"] == "invaliduidmail") {
			echo "Invalid username and e-mail !";
		}
		else if ($_GET["error"] == "invaliduid") {
			echo "Invalid username ! Username must not have any space !";
		}
		else if ($_GET["error"] == "invalidmail") {
			echo "Invalid e-mail !";
		}
		else if ($_GET["error"] == "passwordcheck") {
			echo "Your passwords do not match !";
		}
		else if ($_GET["error"] == "usertaken") {
			echo "Username is already taken !";
		}
	}
	else if (isset($_GET["signup"])) {
		if ($_GET["signup"] == "success") {
             echo "Signup successful !";
		}
	}
	?>
	<form action="signup2.php" method="post">
		<input type="text" name="uid" placeholder="Username">
		<input type="text" name="mail" placeholder="E-mail">
		<input type="password" name="pwd" placeholder="Password">
		<input type="password" name="pwd-repeat" placeholder="Repeat password"><br><br>
		<button class="w3-button w3-teal" type="submit" name="signup-submit">Signup</button>
		<br><br><br><br>
	</form>
</section>
</main>

<?php
require "footer.php";
?>
</body>
</html>