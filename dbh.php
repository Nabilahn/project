<?php

$servername = "localhost";
$dBUsername = "d031910144";
$dBPassword = "010412100286";
$dBName = "student_d031910144";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
	die("Connection failed: ".mysqli_connect_error());
}

?>