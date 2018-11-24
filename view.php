<?php
	session_start();
		$_SESSION["name"]=$_POST["name"];
		$_SESSION["country"]=$_POST["country"];

?>

<html>
	<body>
		<h3>Visitor Information</h3>
	<?php
		$name=$_SESSION["name"];
		$age=$_POST["age"];
		$address=$_POST["address"];
		$gender=$_POST["gender"];
		$country=$_SESSION["country"];

		 echo "Name is".$name."<br>"."
		 	   Age is".$age."years old.<br>"."
		 	   Address id ".$address."<br>"."
		 	   Gender is ".$gender."<br>"."
		 	   lives in ".$country."<br>";
	?>

<a href="seagame.php">Sea Game</a>
</body>
</html>


