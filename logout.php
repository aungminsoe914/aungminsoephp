
<?php

session_start();

//session_destroy();
//unset(var);
unset($_SESSION['username']);
unset($_SESSION['password']);

//header(string);
header("Location:index.php");


include("links.php");

?>

<h1>Logout page.</h1> 