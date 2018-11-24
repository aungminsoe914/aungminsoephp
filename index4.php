<?php

	session_start();
  		if (isset($_POST['submit']))
  		 {
  		 	$username = $_POST['username'];
  		 	$password = $_POST['password'];

  		 	if ($username == "bertha" && $password == "123") 
  		 	{
  		 		$_SESSION['username']=$username;
  		 		$_SESSION['password']=$password;


  		 		//header(string);a href=====,bat.bat
  		 		header("Location:member.php");  		 
  		 	}
  			else
  			{
  				echo "You are not a valid user";
  			}
  		}



//A HREF;;;;;;;;;;;;;;
include("links.php");
?>

<h1>Home Page</h1><br>


<form action="<?php $_PHP_SELF; ?>" method="post">
	Enter your name:<input type="text" name="username"><br><br>
	Enter your password:<input type="password" name="password"><br><br><br>
	<button type="submit" name="submit">Sign in...</button>
</form>