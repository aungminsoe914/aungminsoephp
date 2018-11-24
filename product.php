<?php
session_start();
	if(!isset($_SESSION['username'])){
		header("location:index.php");
	}
include("links.php");
?>

<h1> Product page</h1>