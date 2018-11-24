 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT user.username,user3.email,user3.password from user,user3 where  user.id=1 and user3.id=1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) 

	{
    // output data of each row
    //foreach($result as $item)
 	/*{
 		echo "ID is =>".$item["id"]."<br>";
 		echo "NAME is =>".$item["username"]."<br>";
 		echo "Email is =>".$item["email"]."<br>";
 		echo "Password is =>".$item["password"]."<br>";
 	}*/
    while($row = mysqli_fetch_assoc($result)) {
        echo "Name  " . $row["username"]. "Email  " . $row["email"]. "Password" . $row["password"]. "<br>";
   
	}
		}

 else {
    echo "0 results";
}

mysqli_close($conn); 
?>