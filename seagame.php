<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php
	session_start();

	$name=$_SESSION["name"];
	$country=$_SESSION["country"];

	if(isset($_SESSION["name"]))
		echo "Welcome".$name;
		echo "<br>";
	if(isset($_SESSION["country"]))
		echo "You are from".$country;
		echo "<br/>Thinks";
		echo "<br/>";
		echo "visit to Myanmar.";
	?>
	</body>
</html>