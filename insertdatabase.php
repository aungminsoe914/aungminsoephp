<?php
/*$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php";
*/
$servername="localhost";
$username="root";
$password="";
$dbname="php";//this formet is used insted of mysql_select_db;

	
	$con=mysqli_connect($servername,$username,$password,$dbname);//connect database;

	if(!$con)
	{
		die('Could not connect:'.mysql_error());

	}
	$query="INSERT INTO user(username,email) Values ('Thin Thin','maungmaung@gmail.com')";
	$qry=mysql_query($con,$query);
	if($qry)
	{
		echo "<p>Data inserting success!</p>";


	}
	else
	{
		echo "<p>Something went worng:",mysql_error()+"</p>";
	}
	mysql_close($con);
?>