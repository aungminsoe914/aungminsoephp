<?php
	//define(name,value);
define("DB_HOST","localhost");
define("DB_NAME","php");//you like;;;;;;;;;
define("DB_USER","root");
define("DB_PASS","");

function dbConnect(){
	$db=mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);//db=database;
		echo mysqli_connect_errno()>0? "Connection Error":"Connection Success";
		/*if(mysqli_connect_errno($db) > 0){
		 	die("connection fail");

		 }
		 else
		 {
		 	//echo("$db");
		 	return $db;
		 }*/
		 

				//:or or or
					//echo "<pre>".print_r($db,true)."</pre>";
				// errorDubbger($db);
}

function errorDubbger($data)

{
		echo "<pre>".print_r($data,true)."</pre>";
}
//dbConnect();
//errorDubbger(dbConnect());
function executeQuery($qry)
{
 dbConnect();
 //echo("$db");
 $result=mysql_query($db,$qry);
 if(mysqli_num_rows(result)>0)
 {
 	foreach($result as $item)
 	{
 		echo "ID is =>".$item["id"]."<br>";
 		echo "NAME is =>".$item["username"]."<br>";
 		echo "Email is =>".$item["email"]."<br>";
 		echo "Password is =>".$item["password"]."<br>";
 	}
 }
}
	$qry="SELECT * FROM user";
	executeQuery($qry);

?>