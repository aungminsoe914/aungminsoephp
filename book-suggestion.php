<?php
	//provide your hostname,username and dbname
	$host="localhost";
	$username="root";
	$password="";
	$db_name="w3resout_bookinfo";//point-----------
	$con=mysql_connect("$host","$username","$password") or die("cannot connect");
	mysql_select_db("$db_name");
	$book_name=$_POST['book_name'];
	$sql="select book_name from book_mast where book_name LIKE '$book_name%";
	$result=mysql_query($sql);
	while($row=mysql_fetch_array($result))
	{
		echo "<p>".$row['book_name']."</p>";

	}?>
	
?>