<!DOCTYPE html>
<html>
	<head>
		<title>4 Delicious</title>
		<link rel="icon" href="cup.png" type="image/jpg" sizes="16x16">
	</head>
	<body>
		<div class="bg"></div>
		<br>
		<center><font color="black"><p style="background-color:black">.<br></center>
		<header>
		<?php
require "header.php";
?>

<main>

	<?php
	if (isset($_SESSION['userId'])) {
    echo "You are logged in !";
    }
    else {
    echo "You are logged out !";
	}
	?>
</main>
</header>
<br>
<center><font color="black"><p style="background-color:black">.<br></center><br><br></p>
<center><iframe width="560" height="315" src="https://www.youtube.com/embed/VTocgBWMgXA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></p>
	 <p>4 Delicious merupakan website online shopping yang ditubuhkan semasa PKP dilaksanakan. Kami menjanjikan kualiti makanan yang sangat baik !</p></center><br><br><br>
<center><font color="white"><p style="background-color:black" class="paragraph1" >POWERED BY | 4 DELICIOUS<br></center><br><br></p>

	</body>
</html>

<?php
require "footer.php";
?>
