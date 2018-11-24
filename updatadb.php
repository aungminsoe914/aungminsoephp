<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "Update user Set username='Aung Aung' Where username='Mg Mg'";
$result=mysqli_query($conn, $sql);
if ($result>0) {
    echo " Update successfully";
} else {
    echo "Update Fail";
}

mysqli_close($conn);
?>
