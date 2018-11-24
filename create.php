<?php
$host="localhost";
$user="root";
$pass="";
$con=mysqli_connect($host,$user,$pass);
if(!$con)
{
	die('Could not connect:'.mysqli_error());

}
if(mysqli_query("CREATE DATABASE infodb",$con))
{
	echo "Database has been created!,<br/><br/>";
}
else
{
	echo "Error creating database".mysqli_error();

}
$db="infodb";
$conn=mysqli_connect($host,$user,$pass)
		or die("Database server connection fail!");
		mysql_select_db($db,$conn);
		$query="CREATE TABLE infodb.usertb(
		userid INT(4)NOT NULL AUTO_INCREMENT PRIMARY KEY,
		fullname VARCHAR(50)NOT NULL,
		username VARCHAR(50)NOT NULL,
		password VARCHAR(50)NOT NULL,
		gender VARCHAR(50)NOT NULL,
		age INT(3)NULL,
		address VARCHAR(50)NOT NULL,
		PHONENO VARCHAR(50)NOT NULL,
		email VARCHAR(50)NOT NULL,
		rank VARCHAR(50)NOT NULL,
		attempts INT NULL,
		timestamp INT NULL,
		UNIQUE (username))";
		$result=mysql_query($query,$conn);
		if(!$result)
			echo mysql_error()."<br>";
		else
			echo "'Usertb table'has been successfully created!<br><br>";
		$query="INSERT INTO
		usertb(fullname,username,password,gender,age,address,phoneno,email,rank)
		VALUES('khaingkhaing','khaing',khaing'Female',20,'Latha',
				'09540063582','khaing@gmail.com','Developer'),
				('HninHnin','hnin','hnin','Female',20,'Latha',
				'09540063583','hnin@gmail.com','Junior Developer')";
		$result=mysql_query($query,$conn);
		if(!$result)echo mysql_error()."<br>";
		else
			echo "usertb insert data is successful";
		mysql_close();


?>