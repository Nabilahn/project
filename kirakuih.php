<!DOCTYPE html>
<html>
	<head>
		<title>4 Delicious</title>
		<link rel="icon" href="cup.png" type="image/jpg" sizes="16x16">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" href="style2.css">
		<script src="script.js"></script>
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
			<center><font color="white"><h1 style="background-color:#2F4F4F" class="para2">Order Site</h1></font></center><br>
		<table id="customers">		
			<tr>
				<th><center>No.</center></th>
				<th><center>Name</center></th>
				<th><center>Order Date</center></th>
				<th><center>Semperit <br>(20 pieces)</center></th>
				<th><center>Semperit <br>(50 pieces)</center></th>
				<th><center>Tart Nenas <br>(20 pieces)</center></th>
				<th><center>Tart Nenas <br>(50 pieces)</center></th>
				<th><center>Cookies Chocolate Chip <br>(20 pieces)<center></th>
				<th><center>Cookies Chocolate Chip <br>(50 pieces)<center></th>
				<th><center>Cheese Tart <br>(20 pieces)</center></th>
				<th><center>Cheese Tart <br>(50 pieces)</center></th>
				<th><center>Total Price <br>(RM)</center></th></tr>
<?php

$name = $_POST["nama"];
$fon = $_POST["nomborfon"];
$date = $_POST["tarikh"];
$address = $_POST["alamat"];

$sweet1 = $_POST["kuih1"];
$sweet2 = $_POST["kuih2"];
$sweet3 = $_POST["kuih3"];
$sweet4 = $_POST["kuih4"];
$sweet5 = $_POST["kuih5"];
$sweet6 = $_POST["kuih6"];
$sweet7 = $_POST["kuih7"];
$sweet8 = $_POST["kuih8"];

$pieces1 = $sweet1 + $sweet3 + $sweet5 + $sweet7;
$totpieces1 = $pieces1 * 25;
$pieces2 = $sweet2 + $sweet4 + $sweet6 + $sweet8;
$totpieces2 = $pieces2 * 35;
$total = $totpieces1 + $totpieces2;
echo "<h1>Total price for your order : RM " .$total."</h1>";
echo "<br>";
echo "*** Do the payment after you get your kuih raya (Cash On Delivery) ***";
echo "<br><br><br><br>";

$host = "localhost";
$user = "d031910144";
$pswd = "010412100286";
$dbname = "student_d031910144";
$conn = mysqli_connect($host, $user, $pswd) or die ("Error connecting to MySQL");

mysqli_select_db($conn, $dbname) or die ("Error connecting to Database: " .$dbname);

mysqli_query($conn, "INSERT INTO belikuih VALUES ('$name','$fon','$date','$address','$sweet1','$sweet2','$sweet3','$sweet4','$sweet5','$sweet6','$sweet7','$sweet8','$total')"); 

$query1 = mysqli_query($conn, "SELECT * FROM belikuih");

$bildata = mysqli_num_rows($query1);

echo "We have ".$bildata;
echo " customer that had ordered with us ! All of you totally sweet ! Thank you for supporting us !";

echo "<br> This is the purchase history from all our customer. Again, thank you for buying with 4 Delicious !";
echo "<br><br>";
echo "<p>You need to log out from your account by click Home again at navigation. We hope that we can see you again !</p><br><br>";

echo "<h1>List of customer with their purchase history</h1>";

$count = 0;

foreach ($query1 as $row) {
	$count++;

	echo "<tr><td>".$count."</td><td>".$row["nama"]."</td><td>".$row["tarikhorder"]."</td><td>".$row["semperita"]."</td><td>".$row["semperitb"]."</td><td>".$row["nenasa"]."</td><td>".$row["nenasb"]."</td><td>".$row["choca"]."</td><td>".$row["chocb"]."</td><td>".$row["tarta"]."</td><td>".$row["tartb"]."</td><td>".$row["jumlahharga"]."</td></tr>";
}

mysqli_close($conn);


?>
<div style="background-color:#DCDCDC;">
		</table>
<center><font color="white"><p style="background-color:black" class="paragraph1" >POWERED BY | 4 DELICIOUS<br></center><br></p>
	</body>
</html>